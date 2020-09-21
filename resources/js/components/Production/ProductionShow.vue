<template>
    <div class="div">
        <h1>Производство заказа {{order.order_name }} </h1>
        <h2>Клиент:  {{ order.order_client_id.contragent_name }}</h2>

        <div class="flex-50 "  v-for="item in order.products" :key="item.id">
            <div class="products" >
                <div class="product-card" >
                    <h3> Продукт: {{  item.product_name}}</h3>
                    <h3> Количество: {{  item.product_quantity}}</h3>
                    <b-form-select v-model="item.product_order_warehouse_id">
                        <b-form-select-option v-for="(warehouse, index) in warehouses" :value="warehouse.id" > {{ warehouse.warehouse_name }}</b-form-select-option>

                    </b-form-select>
                </div>
            </div>
            <div class="commodities">
                <div class="commodity_card" >
                    <select name="" id="" >
                        <option :value="commodity.id" v-for="commodity in commodities" > {{ commodity.commodity_name}}</option>
                    </select>


                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        name: "ProductionShow",
        data(){
            return {
                order: {},
                warehouses: {},
                commodities: {},



            }
        },
        created() {
            this.getOrder();
            this.getWarehouses();
            this.getCommodities();
        },
        methods: {
            getOrder(){
                axios
                    .get(`/api/orders/${this.$route.params.id}`)
                    .then((response => {
                        this.order = response.data.data;
                        console.log(this.order);
                    }))
            },
            getWarehouses(){
                axios
                    .get('/api/warehouses')
                    .then(response => {
                        this.warehouses = response.data;

                        console.log(this.warehouses)
                    });
            },
            getCommodities() {
                axios
                    .get('/api/commodities')
                    .then(response => {
                        this.commodities = response.data.data;
                    })
            }
        }
    }

</script>

<style scoped>
    .flex-50 {
        display: flex;
        flex-grow: 50;
        flex-basis: 50;
    }

    .products{
        width: 100%;
    }.commodities{
        width: 100%;
    }
    .product-card {
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
</style>
