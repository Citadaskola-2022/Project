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
<body class="bg-gray-300 text-white h-full grid place-items-center">
    <div id="app"></div>


    <script type="module">
        import App from './js/App.js';

        Vue.createApp(App).mount('#app');
    </script>
</body>
</html>