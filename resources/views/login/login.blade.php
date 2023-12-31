@vite('resources/css/app.css')
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    @notifyCss
</head>

<body class="bg-gray-100 font-poppins-medium">
    @include('notify::components.notify')
    <div class="min-h-screen flex items-center justify-center px-4">
        <div class="max-w-md w-full p-6 bg-white rounded-lg shadow-lg">
            <div class="flex justify-center items-center">
                <div class="bg-black rounded-full overflow-hidden w-20 h-20">
                    <img class="w-full h-full object-cover place-content-center" src="{{ asset('images/logo.png') }}"
                        alt="profile">
                </div>
            </div>
            <h1 class="text-2xl font-poppins-semibold text-center text-gray-500 mt-8 mb-6">LOGIN</h1>
            <form class="space-y-4 md:space-y-6" method="POST" action="/login">
                @csrf
                <div class="mb-6">
                    <label for="email" class="block mb-2 text-sm text-gray-600 required">Email</label>
                    <input type="email" id="email" name="email"
                        class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-sm focus:placeholder-gray-500 focus:bg-whitefocus:border-gray-600 focus:outline-none"
                        required value="{{ old('email') }}">
                </div>
                <div class="py-2" x-data="{ show: true }">
                    <label for="password" class="block mb-2 text-sm text-gray-600 required">Password</label>
                    <div class="relative">
                        <input placeholder="" :type="show ? 'password' : 'text'" type="password" id="password"
                            name="password"
                            class="text-md block px-3 py-2 rounded-lg w-full  bg-white border-2 border-gray-300 placeholder-gray-600 shadow-sm focus:placeholder-gray-500 focus:bg-white  focus:border-gray-600 focus:outline-none pr-12">
                        <div class="absolute inset-y-0 right-0 pr-3 flex items-center text-sm leading-5">
                            <svg class="h-4 text-gray-500" fill="none" @click="show = !show"
                                :class="{ 'block': !show, 'hidden': show }" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 576 512">
                                <path fill="currentColor"
                                    d="M572.52 241.4C518.29 135.59 410.93 64 288 64S57.68 135.64 3.48 241.41a32.35 32.35 0 0 0 0 29.19C57.71 376.41 165.07 448 288 448s230.32-71.64 284.52-177.41a32.35 32.35 0 0 0 0-29.19zM288 400a144 144 0 1 1 144-144 143.93 143.93 0 0 1-144 144zm0-240a95.31 95.31 0 0 0-25.31 3.79 47.85 47.85 0 0 1-66.9 66.9A95.78 95.78 0 1 0 288 160z">
                                </path>
                            </svg>
                            <svg class="h-4 text-gray-500" fill="none" @click="show = !show"
                                :class="{ 'hidden': !show, 'block': show }" xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 640 512">
                                <path fill="currentColor"
                                    d="M320 400c-75.85 0-137.25-58.71-142.9-133.11L72.2 185.82c-13.79 17.3-26.48 35.59-36.72 55.59a32.35 32.35 0 0 0 0 29.19C89.71 376.41 197.07 448 320 448c26.91 0 52.87-4 77.89-10.46L346 397.39a144.13 144.13 0 0 1-26 2.61zm313.82 58.1l-110.55-85.44a331.25 331.25 0 0 0 81.25-102.07a32.35 32.35 0 0 0 0-29.19C550.29 135.59 442.93 64 320 64a308.15 308.15 0 0 0-147.32 37.7L45.46 3.37A16 16 0 0 0 23 6.18L3.37 31.45A16 16 0 0 0 6.18 53.9l588.36 454.73a16 16 0 0 0 22.46-2.81l19.64-25.27a16 16 0 0 0-2.82-22.45zm-183.72-142l-39.3-30.38A94.75 94.75 0 0 0 416 256a94.76 94.76 0 0 0-121.31-92.21A47.65 47.65 0 0 1 304 192a46.64 46.64 0 0 1-1.54 10l-73.61-56.89A142.31 142.31 0 0 1 320 112a143.92 143.92 0 0 1 144 144c0 21.63-5.29 41.79-13.9 60.11z">
                                </path>
                            </svg>
                        </div>
                    </div>
                </div>
                {{-- @if (session('error'))
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative alert">
                    <strong class="font-bold">Waduh!</strong>
                    <span class="block sm:inline">{{ session('error') }}</span>
                    <button class="absolute top-0 right-0 px-4 py-3 close-button" onclick="closeAlert(this)">
                        <svg class="fill-current h-6 w-6 text-red-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <title>Close</title>
                            <path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/>
                        </svg>
                    </button>
                </div>
                @endif --}}
                <div class="flex justify-between">
                    <label class="flex flex-row items-center gap-2 text-gray-500 font-bold my-4">
                        <input type="checkbox" class="leading-loose text-pink-600">
                        <span class="py-2 text-sm text-gray-600 leading-snug font-poppins-regular"> Remember Me </span>
                    </label>
                </div>
                <button type="submit"
                    class="w-32 bg-gradient-to-r from-cyan-400 to-cyan-600 text-white py-2 rounded-lg mx-auto block focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500 mt-4 mb-6">Login</button>
            </form>
        </div>
    </div>
    @notifyJs
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    {{-- <script>
        function closeAlert(button) {
        const alertElement = button.parentElement;
        alertElement.style.display = 'none';
        }
    </script> --}}
</body>

</html>
