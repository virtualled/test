<template>
    <div >

        <b-button @click="modalShow = !modalShow" class="m-5">Open Modal</b-button>

        <b-modal v-model="modalShow" centered size="lg" id="model-characteristic" @ok="addChars" @hidden="cancelModelButton">

            <h1>{{ title }}</h1>

            <b-form-group
                label="Название характеристики"
                label-for="char-name"
            >
                <b-form-input v-model="characteristic.characteristic_value" id="char-name" name="char_value">

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
                <th scope="col">Действия</th>

            </tr>
            </thead>
            <tbody v-for="(item, index) in characteristics" :key="index" v-bind="characteristics">
            <tr>

                <td>{{ item.id }}</td>
                <td>{{ item.characteristic_name }}</td>
                <td>{{ item.characteristic_value }}</td>
                <td>
                    <div>
                        <button class="btn btn-success"> <b-icon icon="pencil-square" @click="editChar(item)"></b-icon></button>
                        <button class="btn btn-danger" @click="deleteChar(item.id)"> <b-icon icon="trash"></b-icon></button>
                    </div>

                </td>



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
                characteristic: {
                    id: '',
                    characteristic_value: '',
                    characteristic_name: '',
                },

                selected: null,
                options: [
                  {value:'Толщина', text: 'Толщина'},
                  {value:'Ширина',  text: 'Ширина'},
                ],
                edit: false,
                modalShow: false,
                title: 'Добавить характеристику'
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

           addChars(characteristic){

                if (this.edit === false) {
                    axios
                        .post('/api/characteristics', {
                            characteristic_value: this.characteristic.characteristic_value,
                            characteristic_name: this.selected
                        })
                        .then( response => {
                            this.charValue = '';
                            this.selected = '';
                            this.getCharacteristics();
                        })
                } else{

                    axios
                        .put(`/api/characteristics/${this.characteristic.id}`, {
                            characteristic_value: this.characteristic.characteristic_value,
                            characteristic_name: this.selected
                        })
                        .then( response => {
                            this.characteristic.characteristic_value = '';
                            // this.selected = '';
                            this.edit = false;
                            this.title = 'Добавить характеристику';
                            this.getCharacteristics();
                        })
                }

           },

            editChar(characteristic){
                this.$bvModal.show('model-characteristic');

                this.edit = true;
                this.title = 'Изменить характеристику';

                this.characteristic.id = characteristic.id;
                this.characteristic.characteristic_value = characteristic.characteristic_value;
                this.selected = characteristic.characteristic_name;
                console.log(characteristic);
                console.log(this.characteristic.id);


            },

            deleteChar(characteristic){
                axios
                    .delete(`/api/characteristics/${characteristic}`)
                    .then( response => {
                        this.getCharacteristics()
                    })
            },

            cancelModelButton(){
                this.title = 'Добавить характеристику';
            }

        },

    }
</script>

<style scoped>

</style>
