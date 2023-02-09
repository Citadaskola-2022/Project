export default {
  template: `
    <div 
        class="grid grid-cols-3 gap-6 bg-gray-600 divide-x"
        style="height: 600px"
    >
      <div class="w-64 p-4">
        <form @submit.prevent="save">
          <label class="mb-4">
            <p>Tips</p>
            <select v-model="form.type" class="bg-gray-700">
              <option>CPU</option>
              <option>GPU</option>
            </select>
          </label>
          
          <label class="mb-4">
            <p>Modelis:</p>
            <input type="text" v-model="form.model" class="bg-gray-700" />
          </label>
          
          <label class="mb-4">
            <p>Cena</p>
            <input type="number" v-model="form.price" class="bg-gray-700" />
          </label>
          
          <p class="mb-4">
            <button 
              type="submit"
              class="border"
            >
              Saglabāt
            </button>
          </p>
        </form>  
      </div>
      <div class="w-64 p-4">
          <p>Tips: {{form.type}}</p>
          <p>Modelis: {{form.model}}</p>
          <p>Cena: {{form.price}}</p>
      </div>
      <div class="p-4 divide-y">
        <div v-for="item in saved">
          <p>Tips: {{item.type}}</p>
          <p>Modelis: {{item.model}}</p>
          <p>Cena: {{item.price}}</p>
        </div>
      </div>
    </div>
    `,
  data() {
    return {
      form: {
        type: '',
        model: '',
        price: ''
      },
      saved: [
        {
          type: 'GPU',
          model: 'Testing test',
          price: '42'
        },
        {
          type: 'CPU',
          model: 'Testing CPU',
          price: '42'
        },
      ]
    }
  },
  methods: {
    save() {
      // ej.uz/salida


      // fetch // axios // https://www.boredapi.com/api/activity
      const item = {
        type: this.form.type,
        model: this.form.model,
        price: this.form.price
      }

      if (item.type === '' || item.model === '' || item.price === '') {
        return;
      }

      this.saved.unshift(item);
      this.form.type = '';
      this.form.model = '';
      this.form.price = '';
    }
  },
  computed: {
    savedTest() {
      return this.saved.filter(item => item.price > 50);
    }

  }
}