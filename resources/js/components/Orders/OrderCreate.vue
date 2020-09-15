<template>
    <div>
        <form action="post">
            <div class="form-group">
                <label for="order_name">Номер Заказа</label>
                <input type="text" class="form-control" v-model="order.order_name" name="order_name" placeholder="Номер">
            </div>
            <div class="form-group">
                <label for="order_date">Дата заказа</label>
                <input type="date" class="form-control" v-model="order.order_date" name="order_date" placeholder="Дата заказа">
            </div>
            <div class="form-group">
                <label for="order_status_name">Статус</label>
                <select name="order_status_name" id="order_status_name" v-model="order.order_status_id" class="form-control">
                    <option disabled value="">Выберите статус</option>
                    <option v-for="status in statuses" :value="status.id"> {{ status.order_status_value}} </option>
                </select>
            </div>
            <div class="form-group">
                <label for="order_payment_name">Оплата</label>
                <select name="order_payment_name" id="order_payment_name" v-model="order.order_payment_id" class="form-control">
                    <option disabled value="">Выберите статус</option>
                    <option v-for="payment in payments" :value="payment.id"> {{ payment.order_status_value}} </option>
                </select>
            </div>
            <div class="form-group">
                <label for="order_sum">Сумма</label>
                <input type="text" class="form-control" v-model="order.order_sum" name="order_sum" placeholder="Сумма">
            </div>
            <div class="form-group">
                <label for="order_shipment_date">Дата заказа</label>
                <input type="date" class="form-control" v-model="order.order_shipment_date" name="order_shipment_date" placeholder="Дата отгрузки">
            </div>
            <div class="form-group">
                <label for="order_client_id">Заказчик</label>
                <select name="order_client_id" v-model="order.order_client_id" class="form-control">
                    <option disabled value="">Выберите статус</option>
                    <option v-for="client in clients" :value="client.id"> {{ client.contragent_name}} </option>
                </select>
            </div>
            <div class="form-group">
                <label for="order_manager_id">Менеджер</label>
                <input type="text" class="form-control" v-model="order.order_manager_id" name="order_manager_id" placeholder="Номер">
            </div>

            <!--            Products-->
            <div class="btn btn-success" @click="!isVisible? isVisible=true : addProduct()">Добавить продукт</div>

            <div class="row">

                <div class="card col-lg-5" v-if="isVisible" v-for="(product, k) in order.products" :key="k">
                    <div class="card-body " >
                        <div  class="btn btn-danger" @click="deleteProduct(k, product)"> delete </div>

<!--                        <div class="form-group" >-->
<!--                            <label for="product_name">Название продукта</label>-->
<!--&lt;!&ndash;                            <input type="text" class="form-control" v-model="order.products[k].product_name" name="product_name" placeholder="Номер">&ndash;&gt;-->

<!--                        </div>-->



                        <b-input-group-append type="text" class="form-control" v-model="order.products[k].product_name" name="product_name" placeholder="Номер">
                            <b-form-input></b-form-input>
                            <b-button variant="outline-success">Button</b-button>


                        </b-input-group-append>

                        <div class="form-group">
                            <label for="product_quantity">Количество</label>
                            <input type="text" class="form-control" v-model="order.products[k].product_quantity" name="product_quantity" placeholder="Номер">
                        </div>

                        <div class="form-group">
                            <label for="product_unit_id">Ед.изм</label>
                            <input type="text" class="form-control" v-model="order.products[k].product_unit_id" name="product_unit_id" placeholder="Номер">
                        </div>

                        <div class="form-group">
                            <label for="product_price">Цена</label>
                            <input type="text" class="form-control" v-model="order.products[k].product_price" name="product_price" placeholder="Номер">
                        </div>

                        <div class="form-group">
                            <label for="product_sum">Сумма</label>
                            <input type="text" class="form-control" v-model="order.products[k].product_sum" name="product_sum" placeholder="Номер">
                        </div>



                    </div>
                </div>
            </div>

            <!--ADDDING-->

            <div class="figures">
                <div class="products-add" v-for="product in productsTest">
                    <b-form-input disabled  :value="product.product_name"></b-form-input>
                    <button @click.prevent="addCart(product)">add</button>
                </div>
            </div>




            <button type="submit" class="btn btn btn-primary btn-block" @click.prevent="store()">Store</button>
        </form>
    </div>
</template>

<script>
    export default {
        name: "OrderCreate",

        data() {
            return{
                order:{
                    order_name:'',
                    order_date:'',
                    order_status_id: '',
                    order_payment_id: '',
                    order_sum: '',
                    order_shipment_date:'',
                    order_client_id: '' ,
                    order_manager_id: '',
                    products:[{
                        product_name:'',
                        product_quantity: '',
                        product_unit_id: '',
                        product_price: '',
                        product_sum: '',
                    }]
                },

                productsTest:[],

                statuses:[],
                payments:[],
                clients:[],
                isVisible:false
            }
        },
        created() {
            //Get statuses
            axios
                .get('/api/statuses')
                .then(response => {
                    const data = response.data;
                    this.statuses = data.filter(v => v.order_status_name == 'Подтреждение');
                    this.payments = data.filter(v => v.order_status_name == 'Оплата');

                });

            //Get Contragents
            axios
                .get('/api/contragents')
                .then(respose => {
                    this.clients = respose.data.data;
                    console.log(this.clients)
                })

            //test

            this.getProducts();

        },
        methods: {
            store() {
                axios
                    .post('/api/orders', {
                        order_name: this.order.order_name,
                        order_date:this.order.order_date,
                        order_status_id: this.order.order_status_id,
                        order_payment_id: this.order.order_payment_id,
                        order_sum: this.order.order_sum,
                        order_shipment_date:this.order.order_shipment_date,
                        order_client_id: this.order.order_client_id,
                        order_manager_id: this.order.order_manager_id,
                        products: this.order.products,

                    })
                    .then(response => {

                        this.order.order_name ='';
                        this.order.order_date ='';
                        this.order.order_status_id = '';
                        this.order.order_payment_id = '';
                        this.order.order_sum = '';
                        this.order.order_shipment_date = '';
                        this.order.order_client_id = '';
                        this.order.order_manager_id = '';

                        console.log(response)
                    })

            },
            addProduct(){
                this.order.products.push({
                    product_name:'1250x1',
                    product_quantity:2,
                    product_unit_id:1,
                    product_price:54,
                    product_sum:330,
                })
            },
            deleteProduct(k, product){
                const productId = this.order.products.indexOf(product);
                if(productId > -1){
                    this.order.products.splice(productId, 1);
                }
                console.log(productId)
            },

            //test
            getProducts(){
                axios
                    .get('/api/products')
                    .then( response => {
                        this.productsTest = response.data.data;
                        console.log(this.productsTest)
                    })
            },
            addCart(item) {
                this.order.products.push({...this.order.products, ...item})
                console.log(this.order.products)
            }
        }

    }
</script>

<style scoped>
    .prod-box{
        margin-top: 40px;
        margin-bottom: 40px;
        border-radius: 3px;
        box-shadow: 0 0 2px 0 rgba(0,0,0,.1), 0 2px 6px 0 rgba(0,0,0,.1);
        width: 100%;
    }
</style>
