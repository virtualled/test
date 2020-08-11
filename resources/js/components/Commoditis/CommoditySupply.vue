<template>
    <h1 class="text-uppercase text-secondary font-weight-bold">
        Поставка сырья
    </h1>

    <div class="form-row">
        <div class="form-group">
            <input
            type="text"
            name="commodity_name"
            class="form-control"
            placeholder="Название"
            >
            <input
                type="text"
                name="weight"
                class="form-control"
                placeholder="Название"
            >
            <input
                type="text"
                name="balance"
                class="form-control"
                placeholder="Название"
            >
            <input
                type="text"
                name="thickness"
                class="form-control"
                placeholder="Название"
            >
            <input
                type="text"
                name="width"
                class="form-control"
                placeholder="Название"
            >
            <input
                type="text"
                name="warehouse_id"
                class="form-control"
                placeholder="Название"
            >

        </div>
        <button class="btn btn-secondary btn-block"></button>

    </div>
</template>

<script>
    export default {
        name: "CommoditySupply"
    }
</script>

<style scoped>

</style>
