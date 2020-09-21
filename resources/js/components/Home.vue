<template>
    <div>
        <h1>Main page</h1>

        <div class="figures">
            <div class="figure-box">
                <h3>Заказы</h3>
                <h1>{{ ordersFigures }}</h1>
            </div>

            <div class="figure-box">
                <h3>Склад</h3>
                <h1>Data</h1>
            </div>

            <div class="figure-box">
                <h3>Доход</h3>
                <h1>{{ orderSum }}</h1>
            </div>
        </div>



    </div>
</template>

<script>
    export default {
        name: "Home",
        data() {
            return {
                orders:'',
                ordersFigures:'',
                orderSum:''
            }
        },
        created() {
           this.getOrders();


        },


        methods: {
            getOrders(){
                axios
                    .get('/api/orders')
                    .then( response => {
                        this.orders = response.data.data;
                        this.countFigures(this.orders);
                        console.log(this.orders)
                    })
            },
            countFigures(item){
                this.ordersFigures = item.length;
                let sum = 0;
                item.forEach( v => {
                    sum += v.order_sum;
                    console.log(sum)
                })
                this.orderSum = sum.toLocaleString('ru');

            }

        }

    }
</script>

<style>
    body {
        background: #f9f9f9 !important;
    }
    .figures{
        margin-top: 60px;

        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
    }
    .figure-box {
        min-width: 300px;
        background: white;
        border: initial;
        box-shadow: 0 1px 15px rgba(0, 0, 0, 0.04), 0 1px 6px rgba(0, 0, 0, 0.04);
        padding: 40px;
        border-radius: 30px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .figure-box h1{
        color: goldenrod;
    }


</style>
