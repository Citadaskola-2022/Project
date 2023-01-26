import Form from './Form.js';
import Saved from './Saved.js';
import Test from './Test.js';

export default {
    components: {Form, Saved, Test },
    template: `
        <div class="grid grid-cols-3 gap-6">
            <section>
                <Form @submit.prevent="saveItem" :formItems="formItems" class="justify-self-start" />
            </section>
            <section>
                <Test :item="preview"></Test>
            </section>
            <section>
                <Saved :items="savedItems" />
            </section>
            
        </div>
    `,
    data () {
        return {
            formItems: [
                { value: '', name : 'Veids', id: 'type', type: 'select', options: ['RAM', 'CPU', 'GPU', 'Motherboard', 'PSU', 'HDD', 'SSD'] },
                { value: '', name : 'Modelis', id: 'model', type: 'text', },
                { value: '', name : 'Cena', id: 'price', type: 'number', },
            ],
            savedItems: [
                {
                    type: 'CPU',
                    model: 'Intel Core i7-13700KF (8P+8E/24T, 3.40 GHz, 30 MB',
                    price: '447.06'
                },
                {
                    type: 'RAM',
                    model: 'G.SKILL Trident Z5 Neo (AMD EXPO), DDR5, 32GB,',
                    price: '199.58'
                },
                {
                    type: 'GPU',
                    model: 'NVIDIA GeForce RTX 3090 Ti, 24GB GDDR6X, Founders',
                    price: '1484.96'
                },
                {
                    type: 'GPU',
                    model: 'Palit GeForce RTX 4090, 24GB GDDR6X, GameRock',
                    price: '2195.00'
                },
                {
                    type: 'RAM',
                    model: 'Patriot Viper Steel 64GB Kit (2x32GB) DDR4-3200 CL16',
                    price: '198.11'
                },
                {
                    type: 'RAM',
                    model: 'Samsung 32GB, DDR3L, 1600MHz, CL11',
                    price: '200.16'
                },
            ]
        }
    },
    methods: {
        saveItem () {
            this.savedItems.unshift(this.preview);
            this.formItems.forEach(i => i.value = '');

        }
    },
    computed: {
        preview () {
            return {
                type: this.formItems[0].value,
                model: this.formItems[1].value,
                price: this.formItems[2].value
            };

        }
    }
}