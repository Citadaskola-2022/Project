import Card from './Card.js';

export default {
    components: {
        Card
    },
    template: `
        <div>
            <h1 class="text-xl font-bold text-white capitalize dark:text-white sticky top-0 z-10">Pārbaude</h1>
            
            <Card class="w-64">
            <ul>
            <li>Veids: {{item.type}},</li>
            <li>Modelis: {{item.model}},</li>
            <li>Cena: {{item.price}},</li>
            </ul>
                
            </Card>
            
            
        </div>
        
    `,
    props: {
        item: Object
    }
}