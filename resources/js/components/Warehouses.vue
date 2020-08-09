<template>
    <div>

        <div class="row"
             v-for="row in rows"
             :key="'row' + row"
        >
            <div class="col d-flex align-items-stretch"
                 v-for="(warehouse, column) in warehouosesInRow(row)"
                :key="'row' + row + column"
            >
                <warehouses-lists
                    :title = 'warehouse.warehouse_name'
                    :quantity = 'warehouse.quantity'
                    :name = 'warehouse.name'
                >
                </warehouses-lists>
            </div>
            <div class="col" v-for="p in placeholdersInRow(row)" :key="'placeholder' + row + p"></div>
        </div>

            <div v-if="loading">
                Data is loading...
            </div>
            <div v-else>

            </div>






    </div>
</template>

<script>
    import WarehousesLists from "./WarehousesLists";
    export default {
        name: "Warehouses",
        components: {
            WarehousesLists
        },

        data() {
            return {
                items:[
                    { age: 40, first_name: 'Dickerson', last_name: 'Macdonald' },
                    { age: 21, first_name: 'Larsen', last_name: 'Shaw' },
                    { age: 89, first_name: 'Geneva', last_name: 'Wilson' },
                    { age: 38, first_name: 'Jami', last_name: 'Carney' }
                ],
                warehouses: null,
                loading: false,
                columns: 3

            }
        },
        created() {
            this.loading = true;

            const request = axios
                .get('/api/warehouses')
                .then(response => {
                    this.warehouses = response.data
                    this.loading = false;
                    console.log(this.warehouses)
                });

        },
        computed: {
            rows(){
                return this.warehouses === null
                ? 0
                : Math.ceil(this.warehouses.length / this.columns)
            }
        },
        methods: {
            warehouosesInRow(row){
              return this.warehouses.slice((row - 1) * this.columns, row * this.columns);
            },

            placeholdersInRow(row){
                return this.columns - this.warehouosesInRow(row).length;
            }
        }


    }
</script>

<style scoped>

</style>
