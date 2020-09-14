<template>
    <b-container>
        <h1>{{ contragent.contragent_name }}</h1>
        <span class="btn btn-warning type">{{ contragent.contragent_type_id}}</span>
        <hr>


        <div class="contragent-block">

            <div class="contact-block">
                <h2> Контакты </h2>
                <div class="block-group">
                    <h3 class="block-title">Адрес: </h3>
                    <p>{{ contragent.contragent_contacts_id.address }}</p>
                </div>
                <div class="block-group">
                    <h3 class="block-title">Адрес: </h3>
                    <p>{{ contragent.contragent_contacts_id.mail }}</p>
                </div>
                <div class="block-group">
                    <h3 class="block-title">Адрес: </h3>
                    <p>{{ contragent.contragent_contacts_id.phone }}</p>
                </div>
                <div class="block-group">
                    <h3 class="block-title">Адрес: </h3>
                    <p>{{ contragent.contragent_contacts_id.web }}</p>
                </div>

            </div>



            <div class="contact-block">
                <h2> Реквизиты </h2>
                <div class="block-group">
                    <h3 class="block-title">Адрес: </h3>
                    <p>{{ contragent.contragent_requisite_id.account }}</p>
                </div>
                <div class="block-group">
                    <h3 class="block-title">Адрес: </h3>
                    <p>{{ contragent.contragent_requisite_id.bank_name }}</p>
                </div>
                <div class="block-group">
                    <h3 class="block-title">Адрес: </h3>
                    <p>{{ contragent.contragent_requisite_id.company_address }}</p>
                </div>
                <div class="block-group">
                    <h3 class="block-title">Адрес: </h3>
                    <p>{{ contragent.contragent_requisite_id.inn }}</p>
                </div>
                <div class="block-group">
                    <h3 class="block-title">Адрес: </h3>
                    <p>{{ contragent.contragent_requisite_id.kpp }}</p>
                </div>
                <div class="block-group">
                    <h3 class="block-title">Адрес: </h3>
                    <p>{{ contragent.contragent_requisite_id.corr_acc }}</p>
                </div>
                <div class="block-group">
                    <h3 class="block-title">Адрес: </h3>
                    <p>{{ contragent.contragent_requisite_id.bank_name }}</p>
                </div>









            </div>


        </div>



    </b-container>
</template>

<script>
    export default {
        name: "ContragentsShow",
        data() {
            return {
                contragent: '',

            }

        },
        created() {
            this.getContragent()
        },
        methods: {
            getContragent(){
                axios
                    .get(`/api/contragents/${this.$route.params.id}`)
                    .then( response => {
                        this.contragent = response.data.data;
                        console.log(response.data.data);
                    })
            }
        }

    }
</script>

<style scoped>
    h1{
        font-size: 5.5rem;
    }
    .type{
        font-weight: bold;
        margin-top: 20px;
    }
    .contragent-block{
        display: flex;
        flex-direction: row;
    }

    .contact-block{
        display: flex;
        flex-direction: column;
        align-items: center;
        flex-basis: 50%;

    }
    .block-group{
        display: flex;
        align-items: baseline;

    }
    .block-title{
        margin-right: 20px;
    }
</style>
