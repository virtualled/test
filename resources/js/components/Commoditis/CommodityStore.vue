<template>
    <div>
        <form action="post">
            <div class="form-group">
                <input type="text" class="form-control" v-model="commodity_name" name="commodity_name" placeholder="commodity_name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control"  v-model="purchase_price" name="purchase_price" placeholder="purchase_price">
            </div>
            <div class="form-group">
                <input type="text" class="form-control"  v-model="weight" name="weight" placeholder="weight">
            </div>
            <div class="form-group">
                <input type="text" class="form-control"  v-model="balance" name="balance" placeholder="balance">
            </div>
            <div class="form-group">
                <input type="text" class="form-control"  v-model="thickness" name="thickness" placeholder="thickness">
            </div>
            <div class="form-group">
                <input type="text" class="form-control"  v-model="width" name="width" placeholder="width">
            </div>
            <div class="form-group">
                <input type="text" class="form-control"  v-model="warehouse_id" name="warehouse_id" placeholder="warehouse_id">
            </div>
            <button type="submit" class="btn btn btn-secondary btn-block" @click.prevent="store()">Store</button>
        </form>
    </div>
</template>

<script>
    export default {
        name: "CommodityStore",
        data() {
            return {
                commodity_name:'',
                purchase_price:'',
                weight:'',
                balance:'',
                thickness:'',
                width:'',
                warehouse_id:'',
            }
        },
        methods: {
            store() {
               axios
                    .post('/api/commodities', {
                        commodity_name: this.commodity_name,
                        purchase_price: this.purchase_price,
                        weight: this.weight,
                        balance: this.balance,
                        thickness: this.thickness,
                        width: this.width,
                        warehouse_id: this.warehouse_id,
                    })
                    .then(response => {
                        this.commodity_name = '',
                            this.purchase_price = '',
                           this.weight = '',
                            this.balance = '',
                             this.thickness = '',
                            this.width = '',
                           this.warehouse_id = '',
                        console.log(response)
                    })

            }
        }
    }
</script>

<style scoped>

</style>
