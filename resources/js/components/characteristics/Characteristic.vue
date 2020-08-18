<template>
    <div >
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Название характеристики</th>
                <th scope="col">Значение характеристики</th>

            </tr>
            </thead>
            <tbody v-for="(item, index) in characteristics" :key="index" v-bind="characteristics">
            <tr>

                <td>{{ item.id }}</td>
                <td>{{ item.characteristic_name }}</td>
                <td>{{ item.characteristic_value }}</td>



            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: "Characteristic",
        data() {
            return{
                characteristics:[]
            }
        },
        created() {
            //Запрос на получение характеристик из БД
            axios
                .get('/api/characteristics')
                .then(response => {
                    this.characteristics = response.data;
                    console.log(this.characteristics)
                })
        }
    }
</script>

<style scoped>

</style>
