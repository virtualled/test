<template>
    <b-container>

        <h1 class="m-5"> Номенклатура </h1>
        <div class="products">
            <div class="product" v-for="(product, index) in products" :key="index">
                <h4> {{product.product_name }}</h4>
            </div>
        </div>
    </b-container>
</template>

<script>
    export default {
        name: "ProductsIndex",
        data() {
            return {
                products: ''
            }
        },
        created() {
            this.getProducts();
        },
        methods: {
            getProducts() {
                axios
                    .get('/api/products')
                    .then( response => {
                        this.products = response.data.data;
                        console.log(this.products)
                    })
            }
        }
    }
</script>

<style scoped>

</style>
