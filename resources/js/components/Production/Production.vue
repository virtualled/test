<template>
    <div>
        <h1>Производство</h1>

        <div class="row">
                 <div class="card-body body-shape" v-for="(order, index) in orders" :key="index">

                        <div class="form-group">
                            <router-link :to="{name: 'production' , params:{id: order.id}}">
                            <p>Заказ: <span>{{ order.order_name }}</span></p>
                            <p>Клиент: <span>{{ order.order_client_id.contragent_name }}</span></p>
                            <p>Дата: <span>{{ order.order_shipment_date }}</span></p>
                            </router-link>
                        </div>

                </div>
            </div>
        </div>


</template>

<script>
    export default {
        name: "Production",
        data(){
            return {
                orders:[]
            }
        },
        created() {
            axios
                .get('/api/orders')
                .then(response => {
                    this.orders = response.data.data;
                    console.log(this.orders)
                })
        }
    }
</script>

<style scoped>

    .body-shape{
        background:rgb(235, 235, 235);;
        border-radius: 12px;
        padding: 16px;
        margin: 20px
    }
    .body-shape:hover{
        box-shadow: 0 0 4px 0 rgba(0,0,0,.1), 0 2px 6px 0 rgba(0,0,0,.1);
        padding: 18px;
    }
</style>
