import InputText from './input-text.js';
import InputNumber from './input-number.js';
import InputSelect from './input-select.js';

export default {
    components: {
        InputText,
        InputNumber,
        InputSelect,
    },
    template: `
        <form class="max-w-4xl p-6 mx-auto bg-indigo-600 rounded-md shadow-md dark:bg-gray-800">
            <h1 class="text-xl font-bold text-white capitalize dark:text-white">Sastāvdaļu rediģēšana</h1>

            <div 
                class="grid grid-cols-1 gap-6 mt-4"
                v-for="item in formItems" 
                :key="item.name"
            >
                <InputText :item="item" v-if="item.type === 'text'">
                    {{ item.name }}
                </InputText>
                <InputNumber :item="item" v-if="item.type === 'number'">
                    {{ item.name }}
                </InputNumber>
                <InputSelect :item="item" v-if="item.type === 'select'">
                    {{ item.name }}
                </InputSelect>
            </div>
            
            <button 
                type="submit"
                class="mt-4 px-6 py-2 leading-5 text-white transition-colors duration-200 transform bg-pink-500 rounded-md hover:bg-pink-700 focus:outline-none focus:bg-gray-600"
            >
                Saglabāt
            </button>
        </form>
    `,
    props: {
        formItems: Array
    }
}