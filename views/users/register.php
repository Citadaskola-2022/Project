<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>

    <form method="POST" action="/register">
        <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
            <div class="mb-4">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="username">
                    Username
                </label>
                <input class="shadow appearance-none border rounded w-full py-2 px-3 text-grey-darker" id="username" type="text" placeholder="Username" name="username">
            </div>
            <div class="mb-6">
                <label class="block text-grey-darker text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input class="shadow appearance-none border border-red rounded w-full py-2 px-3 text-grey-darker mb-3" id="password" type="password" placeholder="******************" name="password">
                <p class="text-red text-xs italic">Please choose a password.</p>
            </div>
            <div class="flex items-center justify-between">
                <button class="bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded" type="submit">
                    Sign In
                </button>
                <a class="inline-block align-baseline font-bold text-sm text-blue hover:text-blue-darker" href="#">
                    Forgot Password?
                </a>
            </div>
        </div>
    </form>

</body>
</html>