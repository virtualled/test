<template>
    <div>
        <h1>{{order.order_name}}</h1>
        <h2>{{ order.order_client_id.contragent_name}} </h2>

        <div v-for="(product, index) in order.products" :key="index" class="box col-lg-3">
            <div class="form-group block ">

                <h4 class="form-control">Название: <span class="prod_text">{{ product.product_name}}</span></h4>
                <h4 class="form-control">Количество: <span class="prod_text">{{ product.product_quantity}}</span></h4>
                <h4 class="form-control">Ед. изм: <span class="prod_text">{{ product.product_unit_id}}</span></h4>
                <h4 class="form-control">Цена: <span class="prod_text">{{ product.product_price}}</span></h4>
                <h4 class="form-control">Сумма: <span class="prod_text">{{ product.product_sum}}</span></h4>


                <div v-for="(detail, index) in product.details" :key="index" class="block">
                    <span>Полоса: {{ detail.id }}</span>
                    <span>Сумма: {{ detail.sum }}</span>
                </div>

            </div>

        </div>
    </div>
</template>

<script>
    export default {
        name: "OrderShow",
        data() {
            return {
                order:{}
            }
        },
        created() {
            axios
                .get(`/api/orders/${this.$route.params.id}`)
                .then((response => {
                    this.order = response.data.data;
                    console.log(this.order);
                }))
        }
    }
</script>

<style scoped>
    .box{
        display: inline-block;
    }
    .box:hover{
        box-shadow: 0 0 4px 0 rgba(0,0,0,.1), 0 2px 6px 0 rgba(0,0,0,.1);
    }
    .block{
        margin-top: 40px;
        margin-bottom: 40px;
        border-radius: 3px;
        box-shadow: 0 0 2px 0 rgba(0,0,0,.1), 0 2px 6px 0 rgba(0,0,0,.1);
        width: 100%;

    }
    .prod_text{
        font-weight: bold;
    }
</style>
