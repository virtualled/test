<template>
    <div>
       <h1>Заказы</h1>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Заказ</th>
                <th scope="col">Клиент</th>
                <th scope="col">Сумма</th>
                <th scope="col">Статус</th>
                <th scope="col">Оплата</th>
                <th scope="col">Дата отгрузки</th>

            </tr>
            </thead>
            <tbody v-for="(item, index) in orders" :key="index" v-bind="orders">
            <tr>

                <td>{{ item.id }}</td>
                <router-link :to="{ name: 'order', params: { id: item.id}}"><td>{{ item.order_name }}</td></router-link>
                <td>{{ item.order_client_id.contragent_name }}</td>
                <td>{{ item.order_sum }}</td>
                <td>{{ item.order_status_id.order_status_value }}</td>
                <td>{{ item.order_payment_id.order_status_value }}</td>
                <td>{{ item.order_shipment_date }}</td>



            </tr>
            </tbody>

        </table>


    </div>
</template>

<script>
    export default {
        name: "Orders",
        data() {
            return {
                orders:[]
            }
        },
        created() {
            //get Orders
            axios
                .get('/api/orders')
                .then(response => {
                    this.orders = response.data.data;
                })
        }
    }
</script>

<style scoped>

</style>
