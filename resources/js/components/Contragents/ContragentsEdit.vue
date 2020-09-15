<template>
    <b-container>
        <h1 class="m-5">Изменить контрагента <span class="contragent_edit_title"> {{ contragent.contragent_name }}</span></h1>

        <form action="post">
            <b-form-group
                label="Название контрагента"
                label-for="contragent_name_input_edit"
                >
                <b-form-input
                    id="contragent_name_input_edit"
                    v-model="contragent.contragent_name"
                    type="text"
                    required
                    placeholder="Введите название"
                >

                </b-form-input>
            </b-form-group>

            <b-form-group
                label="Тип"
                label-for="contragent_type_input_edit"
            >
                <b-form-select
                    v-model="contragent.type"
                >
                    <b-form-select-option v-for="(type) in typeOptions" :value="type.id">
                        {{  type.type_name}}
                    </b-form-select-option>
                </b-form-select>
            </b-form-group>

            <b-form-group
                label="Телефон"
                label-for="contragent_phone_input_edit"
            >
                <b-form-input
                    id="contragent_phone_input_edit"
                    v-model="contragent.contacts.phone"
                    type="text"
                    required
                    placeholder="Введите телефон"
                >

                </b-form-input>
            </b-form-group>

            <b-form-group
                label="Почта"
                label-for="contragent_mail_input_edit"
            >
                <b-form-input
                    id="contragent_mail_input_edit"
                    v-model="contragent.contacts.mail"
                    type="text"
                    required
                    placeholder="Введите почту"
                >

                </b-form-input>
            </b-form-group>

            <b-form-group
                label="Сайт"
                label-for="contragent_web_input_edit"
            >
                <b-form-input
                    id="contragent_web_input_edit"
                    v-model="contragent.contacts.web"
                    type="text"
                    required
                    placeholder="Введите сайт"
                >

                </b-form-input>
            </b-form-group>

            <b-form-group
                label="Адрес Юридический"
                label-for="contragent_company_address_input_edit"
            >
                <b-form-input
                    id="contragent_company_address_input_edit"
                    v-model="contragent.requisite.company_address"
                    type="text"
                    required
                    placeholder="Введите адрес"
                >

                </b-form-input>
            </b-form-group>

            <b-form-group
                label="Адрес фактический"
                label-for="contragent_post_address_input_edit"
            >
                <b-form-input
                    id="contragent_post_address_input_edit"
                    v-model="contragent.requisite.post_address"
                    type="text"
                    required
                    placeholder="Введите адрес"
                >

                </b-form-input>
            </b-form-group>

            <b-form-group
                label="ИНН"
                label-for="contragent_inn_input_edit"
            >
                <b-form-input
                    id="contragent_inn_input_edit"
                    v-model="contragent.requisite.inn"
                    type="text"
                    required
                    placeholder="Введите адрес"
                >

                </b-form-input>
            </b-form-group>

            <b-form-group
                label="КПП"
                label-for="contragent_kpp_input_edit"
            >
                <b-form-input
                    id="contragent_kpp_input_edit"
                    v-model="contragent.requisite.kpp"
                    type="text"
                    required
                    placeholder="Введите адрес"
                >

                </b-form-input>
            </b-form-group>

            <b-form-group
                label="Счет"
                label-for="contragent_account_input_edit"
            >
                <b-form-input
                    id="contragent_account_input_edit"
                    v-model="contragent.requisite.account"
                    type="text"
                    required
                    placeholder="Введите адрес"
                >

                </b-form-input>
            </b-form-group>

            <b-form-group
                label="Корр счет"
                label-for="contragent_corr_acc_input_edit"
            >
                <b-form-input
                    id="contragent_corr_acc_input_edit"
                    v-model="contragent.requisite.corr_acc"
                    type="text"
                    required
                    placeholder="Введите адрес"
                >

                </b-form-input>
            </b-form-group>

            <b-form-group
                label="Банк"
                label-for="contragent_bank_name_input_edit"
            >
                <b-form-input
                    id="contragent_bank_name_input_edit"
                    v-model="contragent.requisite.bank_name"
                    type="text"
                    required
                    placeholder="Введите адрес"
                >

                </b-form-input>
            </b-form-group>

            <button class="btn btn-primary btn-block mt-5" @click.prevent="editContragent">Создать</button>
        </form>
    </b-container>
</template>

<script>
    export default {
        name: "ContragentsEdit",
        data() {
            return  {
                contragent: {
                    id: '',
                    contragent_name: '',
                    contacts:{
                        phone: '',
                        mail: '',
                        web: '',
                        address: '',
                    },
                    type:'',
                    requisite: {
                        company_address: '',
                        post_address: '',
                        inn: '',
                        kpp: '',
                        account: '',
                        corr_acc: '',
                        bank_name: '',

                    }

                },
                typeOptions: ''

            }
        },
        created() {
            this.getContragent();
            this.getTypes();
        },
        methods: {
            getTypes(){
                axios
                    .get('/api/contragenttypes')
                    .then( response => {
                        this.typeOptions = response.data.data;
                        console.log(this.typeOptions)
                    })
            },
            getContragent(){
                axios
                    .get(`/api/contragents/${this.$route.params.id}`)
                    .then( response => {
                        const data = response.data.data;
                        this.contragent.id = data.id,
                        this.contragent.contragent_name = data.contragent_name,
                        this.contragent.type = data.contragent_type_id_id ,

                        this.contragent.contacts.phone = data.contragent_contacts_id.phone,
                        this.contragent.contacts.mail = data.contragent_contacts_id.mail,
                        this.contragent.contacts.web = data.contragent_contacts_id.web,

                        this.contragent.requisite.company_address = data.contragent_requisite_id.company_address,
                        this.contragent.requisite.post_address = data.contragent_requisite_id.post_address,
                        this.contragent.requisite.inn = data.contragent_requisite_id.inn,
                        this.contragent.requisite.kpp = data.contragent_requisite_id.kpp,
                        this.contragent.requisite.account = data.contragent_requisite_id.account,
                        this.contragent.requisite.corr_acc = data.contragent_requisite_id.corr_acc,
                        this.contragent.requisite.bank_name = data.contragent_requisite_id.bank_name,


                        console.log(response.data.data);
                    })
            },
            editContragent(){
                axios
                    .put(`/api/contragents/${this.contragent.id}`, {
                        contragent_name: this.contragent.contragent_name,
                        type: this.contragent.type,

                        phone:  this.contragent.contacts.phone,
                        mail:  this.contragent.contacts.mail,
                        web:  this.contragent.contacts.web,

                        company_address:  this.contragent.requisite.company_address,
                        post_address:  this.contragent.requisite.post_address,
                        inn:  this.contragent.requisite.inn,
                        kpp:  this.contragent.requisite.kpp,
                        account:  this.contragent.requisite.account,
                        corr_acc:  this.contragent.requisite.corr_acc,
                        bank_name:  this.contragent.requisite.bank_name,


                    })
                    .then( response => {

                        this.$router.back();
                    })
            }
        }

    }
</script>

<style scoped>
    .contragent_edit_title {
        margin-left: 40px;
         font-weight: bold;
        font-size: 65px;
        color: goldenrod ;
    }

</style>
