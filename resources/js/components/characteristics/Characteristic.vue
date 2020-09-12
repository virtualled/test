<template>
    <div >

        <b-button @click="modalShow = !modalShow" class="m-5">Open Modal</b-button>

        <b-modal v-model="modalShow" centered size="lg" id="my-model" @ok="addChars">

            <b-form-group
                label="Название характеристики"
                label-for="char-name"
            >
                <b-form-input v-model="charValue" id="char-name" name="char_value">

                </b-form-input>
            </b-form-group>

            <b-form-group
                label="Значение характеристики"
                label-for="char-value"
            >
                <b-form-select v-model="selected" :options="options" size="sm" class="mt-3">

                </b-form-select>

            </b-form-group>

        </b-modal>

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
                characteristics:[],
                charValue: null,
                selected: null,
                options: [
                  {value:'Толщина', text: 'Толщина'},
                  {value:'Ширина',  text: 'Ширина'},
                ],
                modalShow: false
            }
        },
        created() {
            //Запрос на получение характеристик из БД
            this.getCharacteristics();
        },

        methods: {
            getCharacteristics(){
                axios
                    .get('/api/characteristics')
                    .then(response => {
                        this.characteristics = response.data;
                        console.log(this.characteristics)
                    })
            },

           addChars(){
               axios
                .post('/api/characteristics', {
                    characteristic_value: this.charValue,
                    characteristic_name: this.selected
                })
                .then( response => {
                    this.getCharacteristics();
                })
           }
        },

    }
</script>

<style scoped>

</style>
