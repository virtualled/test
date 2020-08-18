<template>
    <div>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Название компании</th>
                <th scope="col">Тип</th>
                <th scope="col">Контакты</th>
                <th scope="col">Реквизиты</th>

            </tr>
            </thead>
            <tbody v-for="(item, index) in contragents" :key="index" v-bind="contragents">
            <tr>

                <td>{{ item.id }}</td>
                <td>{{ item.contragent_name }}</td>
                <td>{{ item.contragent_type_id }}</td>
                <td>{{ item.contragent_contacts_id.phone }}</td>
                <td>{{ item.contragent_requisite_id.bank_name }}</td>



            </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
    export default {
        name: "Contragents",
        data() {
            return {
                contragents:[]
            }
        },
        created() {
            // Get Contargents from DB
            axios
                .get('/api/contragents')
                .then(response => {
                    this.contragents = response.data.data
                })

        }
    }
</script>

<style scoped>

</style>
