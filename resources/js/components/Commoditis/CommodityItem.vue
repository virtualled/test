<template>
    <div>
        <div>
            <b-jumbotron header="" lead="Bootstrap v4 Components for Vue.js 2">
                <p>For more information visit website</p>
                <b-button variant="primary" href="#">More Info</b-button>
            </b-jumbotron>
        </div>
    </div>
</template>

<script>
    export default {
        name: "CommodityItem",

        props: {
        commodityName: String,
        purchasePrice: Number,
        balance: Number,
        weight: Number,
        thickness:Number,
        width: Number,
        warehouse: Number,
        created_at: Date
        }
    }
</script>

<style scoped>

</style>
