@vite('resources/css/app.css')

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body class="bg-gray-100">
    <div class="min-h-screen flex items-center justify-center">
        <div class="max-w-md w-full p-6 bg-white rounded-lg shadow-lg">
            <div class="flex justify-center items-center">
                <div class="bg-black rounded-full overflow-hidden w-20 h-20">
                    <img class="w-full h-full object-cover place-content-center" src="{{ asset('images/ic_profile.png') }}" alt="profile">
                </div>
            </div>
            <h1 class="text-2xl font-semibold text-center text-gray-500 mt-8 mb-6">LOGIN</h1>
            <form class="space-y-4 md:space-y-6" method="POST" action="/login">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm text-gray-600">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-cyan-500" required>
                </div>
                <button type="submit" class="w-32 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mt-4 mb-6">Login</button>
            </form>
        </div>
    </div>
</body>
</html>