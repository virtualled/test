<template>
    <div>
       <router-link :to=" { name: 'contragentsCreate'} " class="btn btn-primary m-3">Добавить контрагента</router-link>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Название компании</th>
                <th scope="col">Тип</th>
                <th scope="col">Контакты</th>
                <th scope="col">Реквизиты</th>
                <th scope="col">Действия</th>

            </tr>
            </thead>
            <tbody v-for="(item, index) in contragents" :key="index" v-bind="contragents">
            <tr>

                <td>{{ item.id }}</td>
                <td>
                    <router-link :to=" { name: 'contragentsShow', params: { id: item.id}}">{{ item.contragent_name }}</router-link></td>
                <td>{{ item.contragent_type_id }}</td>
                <td>{{ item.contragent_contacts_id.phone }}</td>
                <td>{{ item.contragent_requisite_id.bank_name }}</td>
                <td>
                    <router-link :to=" { name: 'contragentsEdit', params: {id: item.id}}" class="btn  btn-success"> <b-icon icon="pencil-square"></b-icon> </router-link>
                    <button class="btn  btn-danger" @click="deleteContragent(item)"> <b-icon icon="trash"></b-icon></button>
                </td>



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
            this.getContragents();

        },
        methods: {
            getContragents() {
                axios
                    .get('/api/contragents')
                    .then(response => {
                        this.contragents = response.data.data
                    })
            },

            deleteContragent(contragent) {
                axios
                    .delete(`/api/contragents/${contragent.id}`)
                    .then( response => {
                        this.getContragents();
                    })
            }
        }
    }
</script>

<style scoped>

</style>
