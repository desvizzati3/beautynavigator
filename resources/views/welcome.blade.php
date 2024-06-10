<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <style>
        .overlay::before {
            content: "";
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background: whitesmoke;
            opacity: 0.4;
        }
    </style>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>



<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100">
        <nav x-data="{ open: false }" class="bg-rose-300  ">
            <!-- Primary Navigation Menu -->
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">
                            <a href="{{ route('welcome') }}">
                                <img src="logo_bn.png" alt="logo" class="block h-12 w-auto">
                            </a>
                        </div>


                        <!-- Navigation Links -->
                        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                {{ __('Home') }}
                            </x-nav-link>
                        </div>
                        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                            <x-nav-link :href="route('fmm')" :active="request()->routeIs('fmm')">
                                {{ __('FMM') }}
                            </x-nav-link>
                        </div>
                        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                            <x-nav-link :href="route('products')" :active="request()->routeIs('products')">
                                {{ __('Products') }}
                            </x-nav-link>
                        </div>
                    </div>

                    <!-- Search Bar -->
                    <div class="flex-grow flex items-center justify-center mx-10 ">
                        <form action="/search" method="GET" class="w-[600px] flex">
                            <input type="text" name="query" class="w-2/3 rounded-md  shadow-sm border-none"
                                placeholder="Search...">
                            <button type="submit"
                                class="ml-2 bg-rose-800 hover:bg-rose-600 text-white rounded-md px-4 py-2">
                                <svg xmlns="https://img.icons8.com/?size=100&id=132&format=png&color=000000"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                </svg>
                            </button>
                        </form>
                    </div>

                    <!-- Settings Dropdown -->
                    <div class="hidden sm:flex sm:items-center sm:ms-6">
                        <a href="{{ route('login') }}">
                            <button class="bg-rose-700 hover:bg-rose-400 text-white font-bold py-2 px-4 rounded">
                                {{ __('Login') }}
                            </button>
                        </a>
                        <div>

                            <!-- Hamburger -->
                            <div class="-me-2 flex items-center sm:hidden">
                                <button @click="open = ! open"
                                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                        <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h16" />
                                        <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Responsive Navigation Menu -->
                    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
                        <div class="pt-2 pb-3 space-y-1">
                            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                {{ __('Dashboard') }}
                            </x-responsive-nav-link>
                        </div>

                        <!-- Register/Login -->
                        <div>
                            <button class="bg-rose-300 hover:bg-rose-400 text-white font-bold py-2 px-4 rounded">
                                {{ __('Register') }}
                            </button>
                            <div>
                            </div>
                        </div>
        </nav>

        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Homepage') }}
            </h2>
        </x-slot>

        <!-- Hero Section -->
        <section class="flex flex-col min-h-screen bg-center bg-cover bg-fixed bg-blend-overlay bg-white/30"
            style="background-image: url('{{ asset('landing_page.jpg') }}')">
            <div class="flex-1 flex items-center">
                <div class="text-center mx-auto w-full md:w-2/3 lg:w-1/2 px-4">
                    <h1 class="text-4xl md:text-7xl font-bold text-rose-800 font-abril drop-shadow-2xl">Welcome to
                        Beauty Navigator!</h1>
                    <p class="font-light text-xl md:text-3xl mt-5 text-rose-700 font-abril drop-shadow-2xl">Your
                        Navigator in Beauty.</p>
                </div>
            </div>
        </section>

        <!-- Slide dan Penjelasan -->
        <section>
            <div class="bg-rose-100 py-10 px-4 md:px-8">
                <div class="flex flex-wrap lg:flex-nowrap space-y-8 lg:space-y-0 lg:space-x-8">
                    <!-- Carousel Section -->
                    <div
                        class="flex-1 flex items-center justify-center relative bg-gray-200 h-64 overflow-hidden rounded-xl border-[5px] border-rose-800">
                        <!-- Slides -->
                        <div class="carousel flex transition-transform duration-300" id="carousel">
                            <div class="slide min-w-full h-64 flex items-center justify-center ">
                                <img src="{{ asset('caraousel/benav.jpg') }}" alt="Slide 1"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="slide min-w-full h-64 flex items-center justify-center ">
                                <img src="{{ asset('caraousel/fmm.jpg') }}" alt="Slide 2"
                                    class="w-full h-full object-cover">
                            </div>
                            <div class="slide min-w-full h-64 flex items-center justify-center">
                                <img src="{{ asset('caraousel/reviews.jpg') }}" alt="Slide 3"
                                    class="w-full h-full object-cover">
                            </div>
                        </div>

                        <!-- Navigation Arrows -->
                        <button class="absolute left-4 bg-rose-200 p-2 rounded-full shadow-md" onclick="prevSlide()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </button>
                        <button class="absolute right-4 bg-rose-200 p-2 rounded-full shadow-md" onclick="nextSlide()">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 5l7 7-7 7" />
                            </svg>
                        </button>

                        <!-- Indicators -->
                        <div class="flex space-x-2 absolute bottom-4">
                            <span class="h-3 w-3 bg-white rounded-full " id="indicator-0"></span>
                            <span class="h-3 w-3 bg-white rounded-full " id="indicator-1"></span>
                            <span class="h-3 w-3 bg-white rounded-full " id="indicator-2"></span>
                        </div>
                    </div>

                    <!-- Recent Articles Section -->
                    <div class="w-full lg:w-1/4 bg-white rounded-xl justify-center items-center p-5">
                        <h2 class="font-bold text-3xl font-abril mb-2 text-rose-800">What's in BeauNav.</h2>
                        <div class="justify-center items-center flex">
                            <ul class="mt-5 justify-center items-center text-center text-xl font-abril ">
                                <li class="mb-2 font-italic">Product Reviews</li>
                                <li class="mb-2 font-italic">Find My Makeup</li>
                                <li class="font-italic">and more to discover</li>
                                <li class="justify-center items-center flex mt-2">
                                    <img src="logo_bn.png" alt=""
                                        class="h-9 w-9 justify-center items-center flex">
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!---Find My MakeUp Section--->
        <section class="bg-rose-100 p-[30px]  ">
            <div class=" border-[3px] border-rose-300 h-96 rounded-xl flex justify-center items-center p-3">
                <div class="flex-1 p-4 justify-center items-center ">
                    <div class="justiy-center items-center flex ml-[60px]">
                        <div class="w-[500px] h-[300px] flex">
                            <img src="fmm_cover.jpeg"
                                class="w-full h-full rounded-2xl border-[5px] object-cover border-rose-900 shadow-2xl">
                        </div>
                    </div>
                </div>
                <!---Find My MakeUp Description--->
                <div class="flex-1 p-4 h-[350px]">
                    <div class="drop-shadow-2xl">
                        <h1 class="font-bold text-6xl font-abril mt-2 text-rose-900 ">Find My MakeUp</h1>
                    </div>

                    <p class="mt-7 font-abril text-lg">Find Your Perfect Matches!</p>
                    <p class="font-abril text-lg">FInd My Makeup is one of our features for you as a smart solution to
                        find the makeup products that suit you best. In just a few clicks, we'll match your skin and
                        preferences with the perfect product for you, ensuring flawless results every time. Let us help
                        bring out your natural beauty and make you look stunning!</p>

                    <button type="button"
                        class="bg-rose-50  shadow-lg hover:bg-rose-400 hover:border-rose-400 hover:text-white text-stone-600 font-bold py-2 px-4 rounded-full  border-[3px] border-rose-300 w-60 h-10 flex items-center justify-center mt-6"
                        onclick="window.location.href='{{ route('login') }}';">
                        Find My Makeup!
                    </button>



                </div>
            </div>
        </section>

        <!---Categories--->
        <section class="bg-rose-100 p-[30px]">
            <div class="bg-white p-[30px] justify-center rounded-xl items-center flex flex-col">
                <div class="justify-center items-center">
                    <h2 class="font-bold text-6xl font-abril text-rose-700">Categories</h2>
                </div>
                <div
                    class="max-w-4xl mx-auto grid grid-cols-5 gap-10 mt-10 justify-center items-center mb-10 text-custom-color-text">
                    <a href="{{ route('login') }}" class="flex flex-col items-center overflow-hidden">
                        <div
                            class="h-[200px] w-[150px] flex justify-center items-center border-[5px] border-rose-900 drop-shadow-xl rounded-full">
                            <img src="{{ asset('categories/complexion.jpeg') }}"
                                class="w-full h-full object-cover object-center rounded-full" />
                        </div>
                        <p class="mt-2 text-xl font-bold font-abril">Complexion</p>
                    </a>
                    <a href="{{ route('login') }}" class="flex flex-col items-center overflow-hidden">
                        <div
                            class="h-[200px] w-[150px] flex justify-center items-center border-[5px] border-rose-900 drop-shadow-xl rounded-full">
                            <img src="{{ asset('categories/eye.jpeg') }}"
                                class="w-full h-full object-cover object-center rounded-full" />
                        </div>
                        <p class="mt-2 text-xl font-bold font-abril">Eye</p>
                    </a>
                    <a href="{{ route('login') }}" class="flex flex-col items-center overflow-hidden">
                        <div
                            class="h-[200px] w-[150px] flex justify-center items-center border-[5px] border-rose-900 drop-shadow-xl rounded-full">
                            <img src="{{ asset('categories/lip.jpeg') }}"
                                class="w-full h-full object-cover object-center rounded-full" />
                        </div>
                        <p class="mt-2 text-xl font-bold font-abril">Lip</p>
                    </a>
                    <a href="{{ route('login') }}" class="flex flex-col items-center overflow-hidden">
                        <div
                            class="h-[200px] w-[150px] flex justify-center items-center border-[5px] border-rose-900 drop-shadow-xl rounded-full">
                            <img src="{{ asset('categories/face.jpeg') }}"
                                class="w-full h-full object-cover object-center rounded-full" />
                        </div>
                        <p class="mt-2 text-xl font-bold font-abril">Face</p>
                    </a>
                    <a href="{{ route('login') }}" class="flex flex-col items-center overflow-hidden">
                        <div
                            class="h-[200px] w-[150px] flex justify-center items-center border-[5px] border-rose-900 drop-shadow-xl rounded-full">
                            <img src="{{ asset('categories/powder.jpeg') }}"
                                class="w-full h-full object-cover object-center rounded-full" />
                        </div>
                        <p class="mt-2 text-xl font-bold font-abril">Powder</p>
                    </a>
                </div>
                <div class="flex flex-col justify-center items-center">
                    <h1 class="font-bold font-abril text-2xl text-rose-300 drop-shadow-xl text-center max-w-2xl">
                        Discover your perfect products by exploring each category!</h1>
                    <p class="font-abril text-lg mt-3 text-center max-w-2xl ">For every product you view, you'll find
                        reviews from other users. Let their experiences help you find the perfect products just for you!
                    </p>
                </div>
            </div>

        </section>
        <footer class="bg-rose-300 text-gray-800 py-4">
            <div class="container mx-auto flex justify-between items-center">
                <div class="text-left">
                    <p class="font-bold">Contact</p>
                    <p>Jl. Raya Mayjen Sungkono No.KM 5<br>Purbalingga, 53371</p>
                </div>
                <div class="text-center">
                    <p class="font-bold">Connect</p>
                    <div class="flex space-x-4 mt-2 justify-center items-center">
                        <!--instagram-->
                        <a href="#" class="text-gray-800">
                            <img src="https://img.icons8.com/?size=100&id=32309&format=png&color=000000"
                                class="h-6 w-6" viewBox="0 0 24 24">
                            </img>
                        </a>

                    </div>
                </div>
                <div class="text-right">
                    <p>Beauty Navigator &copy; 2024</p>
                </div>
            </div>
        </footer>
    </div>
</body>


<script>
    let currentSlide = 0;

    function showSlide(index) {
        const slides = document.querySelectorAll('.slide');
        const indicators = document.querySelectorAll('[id^=indicator-]');
        const totalSlides = slides.length;

        if (index >= totalSlides) {
            currentSlide = 0;
        } else if (index < 0) {
            currentSlide = totalSlides - 1;
        } else {
            currentSlide = index;
        }

        const offset = -currentSlide * 100;
        document.getElementById('carousel').style.transform = `translateX(${offset}%)`;

        indicators.forEach((indicator, i) => {
            if (i === currentSlide) {
                indicator.classList.remove('bg-white');
                indicator.classList.add('bg-gray-400');
            } else {
                indicator.classList.remove('bg-gray-800');
                indicator.classList.add('bg-white');
            }
        });
    }

    function nextSlide() {
        showSlide(currentSlide + 1);
    }

    function prevSlide() {
        showSlide(currentSlide - 1);
    }

    showSlide(currentSlide);
</script>
