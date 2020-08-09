<template>
    <div>
        <b-card

            img-src="https://picsum.photos/600/300/?image=25"
            img-alt="Image"
            img-top
            tag="article"
            style="max-width: 20rem;"
            class="mb-4 w-100"
        >
            <b-card-header>
                {{ title }}
                {{ name }}
            </b-card-header>
            <b-card-text>
                {{ quantity }} tons
            </b-card-text>

            <b-button href="#" variant="primary">Button</b-button>
        </b-card>
    </div>
</template>

<script>
    export default {
        name: "WarehousesLists",
        props: {title: String, quantity: Number, name: String},

        mounted(){
            console.log(this.title);
        },


    }
</script>

<style scoped>

</style>
