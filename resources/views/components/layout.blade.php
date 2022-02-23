<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
</head>

<body>
    <header>
        <nav class="navbar bg-black drop-shadow-lg hover:drop-shadow-2xl">
            <div class="container-fluid flex items-center md:justify-between justify-center sm:justify-center sm:flex-col flex-col lg:flex-row md:flex-row">
                <a class="text-white p-4 text-lg" href="#">{{$pageTitle}}</a>
                <div class="">
                    <ul class="flex mb-4 lg:mb-0 md:mb-0">
                        <li class="">
                            <a class="text-white mr-4 hover:bg-white p-2 hover:rounded-b hover:text-black duration-300" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="">
                            <a class="text-white mr-4 hover:bg-white p-2 hover:rounded-b hover:text-black duration-300" href="{{url('/about')}}">About</a>
                        </li>
                        <li class="">
                            <a class="text-white mr-4 hover:bg-white p-2 hover:rounded-b hover:text-black duration-300" href="{{url('/contact')}}">Contact</a>
                        </li>
                        <li class="">
                            <a class="text-white mr-4 hover:bg-white p-2 hover:rounded-b hover:text-black duration-300" href="{{url('/product')}}">Products</a>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>

    </header>

    {{ $slot }}


    <footer class="py-3 mt-auto bg-black container-fluid ">
        <ul class="nav flex justify-center text-center border-bottom py-3 mb-3">
            <li><a href="{{url('/')}}" class="text-white mr-4 hover:bg-white p-2 hover:rounded-b hover:text-black duration-300">Home</a></li>
            <li><a href="{{url('/about')}}" class="text-white mr-4 hover:bg-white p-2 hover:rounded-b hover:text-black duration-300">About</a></li>
            <li><a href="{{url('/contact')}}" class="text-white mr-4 hover:bg-white p-2 hover:rounded-b hover:text-black duration-300">Contact</a></li>
            <li><a href="{{url('/product')}}" class="text-white mr-4 hover:bg-white p-2 hover:rounded-b hover:text-black duration-300">Products</a></li>
        </ul>
        <hr class="mb-4 bg-gray-500">
        <p class="text-center text-gray-500 pb-5">©2022 softsons.com</p>
    </footer>

</body>

</html>