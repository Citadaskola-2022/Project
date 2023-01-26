export default {
    template: `
        <label>
            <span class="text-white dark:text-gray-200">
                <slot/>
            </span>
            <select 
                v-model="item.value" 
                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring"
            >
                <option v-for="opt in item.options" :value="opt">{{ opt }}</option>
            </select>
        </label>
    `,

    props: {
        item: Object
    }
}
