import Card from "./Card.js";

export default {
    components: {
        Card
    },
    template: `
        <div class="text-gray-800 overflow-y-auto max-h-screen">
            <h1 class="text-xl font-bold text-white capitalize dark:text-white sticky top-0 z-10">Saglabātie</h1>
            
            <Card v-for="item in items" :key="item.model" class="mb-4 w-64">
                <ul class="text-white dark:text-gray-200">
                    <li><span>Veids:</span> {{item.type}}</li>
                    <li><span>Nosaukums:</span> {{item.model}}</li>
                    <li><span>Cena:</span> {{item.price}}</li>
                </ul>
            </Card>
        </div>
    `,
    props: {
        items: Array
    }
}