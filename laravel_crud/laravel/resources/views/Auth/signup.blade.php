<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" href="{{ asset('images/asiaRoyalLogo.png') }}" sizes="16x16" type="image/png">
    <script src="https://kit.fontawesome.com/31104486ca.js" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.8.1/flowbite.min.css" rel="stylesheet" />
    <title>SignUp</title>
</head>

<body>
    <!-- component -->
    <div class="flex h-screen w-full items-center justify-end pr-20 bg-gray-900 bg-cover bg-no-repeat"
        style="background-image:url('{{ asset('images/bg.png') }}">
        <div class="rounded-xl bg-gray-800 bg-opacity-50 px-16 py-10 shadow-lg backdrop-blur-md max-sm:px-8">
            <div class="text-white">
                <div class="mb-8 flex flex-col  items-center">
                    <img src="{{ asset('images/asiaRoyalLogo.png') }}" class="mb-5" width="200" alt=""
                        srcset="" />
                    <h1 class="mb-2 text-2xl">Asia Royal</h1>
                    <span class="text-gray-300">Enter Signup Details</span>
                </div>
                <form action="/registration" method="post">
                    @csrf
                    <div class="mb-4 text-lg">
                        <input
                            class=" rounded-lg border-none bg-yellow-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md"
                            type="email" name="email" placeholder="your email" />
                        @error('email')
                            <p class=" text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4 text-lg">
                        <input
                            class=" rounded-lg border-none bg-yellow-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md"
                            type="text" name="name" placeholder="username" />
                        @error('name')
                            <p class=" text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="mb-4 text-lg">
                        <input
                            class="rounded-lg border-none bg-yellow-400 bg-opacity-50 px-6 py-2 text-center text-inherit placeholder-slate-200 shadow-lg outline-none backdrop-blur-md"
                            type="Password" name="password" placeholder="*********" />
                        @error('password')
                            <p class=" text-red-500">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-8 flex justify-center text-lg text-black">
                        <button type="submit"
                            class="rounded-3xl bg-yellow-400 bg-opacity-50 px-10 py-2 text-white shadow-xl backdrop-blur-md transition-colors duration-300 hover:bg-yellow-600">SignUp</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
