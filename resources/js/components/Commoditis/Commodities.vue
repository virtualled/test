<template>
    <div>
        <div class="row">
            <div class="form-row form-center">
                <div class="form-group col-md-6">
                    <input type="text" name="created_at" placeholder="created" class="form-control" v-model="created_at" @keyup.enter="check">
                </div>
                <div class="form-group col-md-6">
                    <input type="text" name="updated_at" placeholder="created"  class="form-control" v-model="updated_at" @keyup.enter="check">
                </div>


                <button class="btn btn-secondary btn-block" @click="check">Click</button>
            </div>
        </div>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Название сырья</th>
                    <th scope="col">Цена закупки</th>
                    <th scope="col">Сумма</th>
                    <th scope="col">Вес</th>
                    <th scope="col">Остаток</th>
                    <th scope="col">Толщина</th>
                    <th scope="col">Ширина</th>
                    <th scope="col">Дата поставки</th>
                    <th scope="col">Производитель</th>
                    <th scope="col">Владелец</th>
                    <th scope="col">Склад</th>

                </tr>
                </thead>
                <tbody v-for="(item, index) in commodity" :key="index" v-bind="commodity">
                <tr>
                    <router-link :to="{ name: 'commodity', params: { id: item.id}}"><th scope="row">{{ item.id }}</th></router-link>

                    <td>{{ item.commodity_name }}</td>
                    <td>{{ item.purchase_price }}</td>
                    <td>{{ item.purchase_sum }}</td>
                    <td>{{ item.weight }}</td>
                    <td>{{ item.balance }}</td>
                    <td>{{ item.thickness }}</td>
                    <td>{{ item.width }}</td>
                    <td>{{ item.supply_date }}</td>
                    <td>{{ item.manufacturer_id }}</td>
                    <td>{{ item.owner_id }}</td>
                    <td>{{ item.warehouse_id }}</td>
                    <td>
                        <router-link :to="{ name: 'commodityEdit', params: { id: item.id}}">
                            <button class="btn-success btn">  <b-icon icon="pencil-square"></b-icon>
                            </button>
                        </router-link></td>
                    <td>
                        <button class="btn btn-danger" @click="deleteCommodity(item.id)">
                            <b-icon icon="trash"></b-icon>
                        </button></td>


                </tr>
                </tbody>
            </table>

        </div>

        <commodity-store></commodity-store>

    </div>
</template>

<script>
    import CommodityItem from "./CommodityItem";
    import Commodity from "./Commodity"
    import CommodityStore from "./CommodityStore";
    export default {
        name: "Commodities",
        components: {
            CommodityItem,
            Commodity,
            CommodityStore
        },
        data() {
            return {
                commodity: null,
                created_at:null,
                updated_at: null
            }
        },
        created() {

            this.getCommodities();

        },

        methods: {
            getCommodities() {
                const request = axios
                    .get('/api/commodities')
                    .then(response => {
                        this.commodity = response.data.data;
                    })
            },

            deleteCommodity(id){
                axios
                    .delete(`/api/commodities/${id}`)
                    .then( response => {
                        this.getCommodities();
                    })
            },

            check() {
                alert('Hello!')
            }
        }

    }
</script>

<style scoped>
    .form-center {
        margin: 0 auto;
        margin-bottom: 40px;
    }
</style>
