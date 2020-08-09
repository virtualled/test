<template>
    <div>
        <div class="row">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Название сырья</th>
                    <th scope="col">Цена закупки</th>
                    <th scope="col">Вес</th>
                    <th scope="col">Остаток</th>
                    <th scope="col">Толщина</th>
                    <th scope="col">Ширина</th>
                    <th scope="col">Склад</th>
                    <th scope="col">Дата поставки</th>
                </tr>
                </thead>
                <tbody v-for="(item, index) in commodity" :key="index" v-bind="commodity">
                <tr>
                    <router-link :to="{ name: 'commodity', params: { id: item.id}}"><th scope="row">{{ item.id }}</th></router-link>

                    <td>{{ item.commodity_name }}</td>
                    <td>{{ item.purchase_price }}</td>
                    <td>{{ item.weight }}</td>
                    <td>{{ item.balance }}</td>
                    <td>{{ item.thickness }}</td>
                    <td>{{ item.width }}</td>
                    <td>{{ item.warehouse_id }}</td>
                    <td>{{ item.created_at }}</td>

                </tr>
                </tbody>
            </table>

        </div>

    </div>
</template>

<script>
    import CommodityItem from "./CommodityItem";
    import Commodity from "./Commodity"
    export default {
        name: "Commodities",
        components: {
          CommodityItem,
            Commodity
        },
        data() {
            return {

                commodity: null
            }
        },
        created() {
            const request = axios
            .get('/api/commodities')
            .then(response => {
                this.commodity = response.data.data;
            })


        }
    }
</script>

<style scoped>

</style>
