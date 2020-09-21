<template>
    <b-container>
        <h1 class="m-5">Добавить контрагента</h1>

        <form action="post">
            <b-form-group
                label="Название контрагента"
                label-for="contragent_name_input"
                >
                <b-form-input
                    id="contragent_name_input"
                    v-model="contragent.contragent_name"
                    type="text"
                    required
                    placeholder="Введите название"
                >

                </b-form-input>
            </b-form-group>

            <b-form-group
                label="Телефон"
                label-for="contragent_phone_input"
            >
                <b-form-input
                    id="contragent_phone_input"
                    v-model="contragent.contacts.phone"
                    type="text"
                    required
                    placeholder="Введите телефон"
                >

                </b-form-input>
            </b-form-group>

            <b-form-group
                label="Почта"
                label-for="contragent_mail_input"
            >
                <b-form-input
                    id="contragent_mail_input"
                    v-model="contragent.contacts.mail"
                    type="text"
                    required
                    placeholder="Введите почту"
                >

                </b-form-input>
            </b-form-group>

            <b-form-group
                label="Сайт"
                label-for="contragent_web_input"
            >
                <b-form-input
                    id="contragent_web_input"
                    v-model="contragent.contacts.web"
                    type="text"
                    required
                    placeholder="Введите сайт"
                >

                </b-form-input>
            </b-form-group>

            <b-form-group
                label="Адрес"
                label-for="contragent_address_input"
            >
                <b-form-input
                    id="contragent_address_input"
                    v-model="contragent.contacts.address"
                    type="text"
                    required
                    placeholder="Введите адрес"
                >

                </b-form-input>
            </b-form-group>

            <button class="btn btn-primary btn-block mt-5" @click.prevent="createContragent">Создать</button>
        </form>
    </b-container>
</template>

<script>
    export default {
        name: "ContragentsCreate",
        data() {
            return  {
                contragent: {
                    contragent_name: 'Apple',
                    contacts:{
                        phone: '+72323',
                        mail: 'mail@meil.ru',
                        web: 'www.apple.com',
                        address: 'USE Cupertino',
                    },
                    type:'1',
                    requisite: {
                        company_address: 'Moscow',
                        post_address: 'Moscow',
                        inn: '123213',
                        kpp: '33321',
                        account: '3232',
                        corr_acc: '3333',
                        bank_name: 'VTB',

                    }

                },

            }
        },
        methods: {
            createContragent(){
                axios
                    .post('/api/contragents', {
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

</style>
