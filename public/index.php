<!doctype html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Programmēšana 2 || Frontend</title>

    <script src="https://unpkg.com/vue@3"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-800 text-white h-full grid place-items-center">

<!--    <h2>Users</h2>-->
<!--    <ul>-->
<!--        <li>John Doe</li>-->
<!--        <li>Jane Doe</li>-->
<!--        <li>Foo Bar</li>-->
<!--    </ul>-->

    <div id="app">
        <p>{{ greeting }} ({{ greeting.length }})</p>

        <input
            class="bg-gray-600 p-2"
            v-model="greeting"
        />
        
        <button
            :class="active ? 'text-green-500' : 'text-red-500'"
            @click="toggle"
        >Click me</button>
    </div>


    <script>
        Vue.createApp({
            data () {
                return {
                    greeting: 'Hello CITADASKOLA!',
                    active: false,
                }
            },
            mounted () {

            },
            methods: {
                toggle () {
                    this.active = !this.active;
                }
            }
        }).mount('#app');
    </script>
</body>
</html>