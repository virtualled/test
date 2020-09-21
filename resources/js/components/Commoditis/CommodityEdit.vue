<template>
    <b-container>

        <router-link :to="{ name: 'commodities'}">Назад</router-link>
        <h1>Сырье: <span>{{ commodity.commodity_name }}</span></h1>

        <form action="post">
            <div class="form-group">
                <input type="text" class="form-control" v-model="commodity.commodity_name" name="commodity_name" placeholder="commodity_name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control"  v-model="commodity.purchase_price" name="purchase_price" placeholder="purchase_price">
            </div>
            <div class="form-group">
                <input type="text" class="form-control"  v-model="commodity.purchase_sum" name="purchase_sum" placeholder="purchase_sum">
            </div>
            <div class="form-group">
                <input type="text" class="form-control"  v-model="commodity.weight" name="weight" placeholder="weight">
            </div>
            <div class="form-group">
                <input type="text" class="form-control"  v-model="commodity.balance" name="balance" placeholder="balance">
            </div>

            <div class="form-group">
                <select name="thickness" id="thickness" v-model="commodity.thickness" class="form-control">
                    <option value="" disabled>Выберите толщину</option>

                    <option v-for="thick in thickness" :value="thick.id"> {{ thick.characteristic_value}} </option>
                </select>
            </div>
            <div class="form-group">
                <select name="width" id="width" v-model="commodity.width" class="form-control">
                    <option value="" disabled>Выберите ширину</option>

                    <option v-for="w in width" :value="w.id"> {{ w.characteristic_value}} </option>
                </select>
            </div>
            <div class="form-group">
                <select name="warehouse_id" id="warehouse_id" v-model="commodity.warehouse_id" class="form-control">
                      <option v-for="warehouse in warehouses" :value="warehouse.id" >{{ warehouse.warehouse_name }}</option>
                </select>
                <span> Выбрано: {{ commodity.warehouse_id }}</span>
            </div>
            <button type="submit" class="btn btn btn-secondary btn-block" @click.prevent="editCommodity(commodity)">Update</button>
        </form>
    </b-container>
</template>

<script>
    export default {
        name: "CommodityEdit",
        data() {
            return {
                commodity: {},
                warehouses: {},
                thickness:[],
                width:[]
            }
        },
        created() {
                axios
                    .get(`/api/commodity/${this.$route.params.id}`)
                    .then( response => {
                        this.commodity = response.data.data;
                    });

                axios
                    .get('/api/warehouses')
                    .then( response => {
                        this.warehouses = response.data;
                    });

                axios
                    .get('/api/characteristics')
                    .then( response => {
                        const data = response.data;

                        this.thickness = data.filter( v => v.characteristic_name ==  'Толщина');
                        this.width = data.filter( v => v.characteristic_name == 'Ширина');
                    });


            },
        methods: {
               editCommodity(commodity){
                   axios
                       .put(`/api/commodities/${this.commodity.id}`, commodity)
                       .then( response => {
                           console.log(response);
                           this.$router.back();
                       })
               }

        }


    }
</script>

<style scoped>

</style>
