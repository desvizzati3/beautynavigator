<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Homepage') }}
        </h2>
    </x-slot>

    <!-- Hero Section -->
    <section class="flex flex-col min-h-screen bg-center bg-cover bg-fixed bg-blend-overlay bg-white/30" style="background-image: url('{{ asset('landing_page.jpg') }}')">
        <div class="flex-1 flex items-center">
            <div class="text-center mx-auto w-full md:w-2/3 lg:w-1/2 px-4">
                <h1 class="text-4xl md:text-7xl font-bold text-rose-800 font-abril drop-shadow-2xl">Welcome to Beauty Navigator!</h1>
                <p class="font-light text-xl md:text-3xl mt-5 text-rose-700 font-abril drop-shadow-2xl">Your Navigator in Beauty.</p>
            </div>
        </div>
    </section>

        <!-- Slide dan Penjelasan -->
    <section>
    <div class="bg-rose-100 py-10 px-4 md:px-8">
        <div class="flex flex-wrap lg:flex-nowrap space-y-8 lg:space-y-0 lg:space-x-8">
            <!-- Carousel Section -->
            <div class="flex-1 flex items-center justify-center relative bg-gray-200 h-64 overflow-hidden rounded-xl border-[5px] border-rose-800">
                <!-- Slides -->
                <div class="carousel flex transition-transform duration-300" id="carousel">
                    <div class="slide min-w-full h-64 flex items-center justify-center ">
                        <img src="{{ asset('caraousel/benav.jpg') }}" alt="Slide 1" class="w-full h-full object-cover">
                    </div>
                    <div class="slide min-w-full h-64 flex items-center justify-center ">
                        <img src="{{ asset('caraousel/fmm.jpg') }}" alt="Slide 2" class="w-full h-full object-cover">
                    </div>
                    <div class="slide min-w-full h-64 flex items-center justify-center">
                        <img src="{{ asset('caraousel/reviews.jpg') }}" alt="Slide 3" class="w-full h-full object-cover">
                    </div>
                </div>

                <!-- Navigation Arrows -->
                <button class="absolute left-4 bg-rose-200 p-2 rounded-full shadow-md" onclick="prevSlide()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button class="absolute right-4 bg-rose-200 p-2 rounded-full shadow-md" onclick="nextSlide()">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
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
            <div class="w-full lg:w-1/4 bg-white drop-shadow-2xl rounded-xl p-5">
                <h2 class="font-bold text-4xl font-abril mb-2 text-rose-800">What's in BeNav.</h2>
                <div class="justify-center items-center flex">
                     <ul class="mt-5 justify-center items-center text-center text-xl font-abril ">
                    <li class="mb-2 font-italic">Product Reviews</li>
                    <li class="mb-2 font-italic">Find My Makeup</li>
                    <li class="font-italic">and more to discover</li>
                    <li class="justify-center items-center flex mt-2">
                        <img src="logo_bn.png" alt="" class="h-9 w-9 justify-center items-center flex">
                    </li>

                </ul>
                </div>
            </div>
        </div>
    </div>
    </section>

    <!---Find My MakeUp Section--->
    <section class="bg-rose-100 p-[30px]  ">
        <div class=" border-[3px] border-rose-300 h-96 rounded-xl flex justify-center drop-shadow-2xl items-center p-3" >
            <div class="flex-1 p-4 justify-center items-center ">
                <div class="justiy-center items-center flex ml-[60px]">
                    <div class="w-[500px] h-[300px] flex">
                         <img src="fmm_cover.jpeg" class="w-full h-full rounded-2xl border-[5px] object-cover border-rose-900 shadow-2xl">
                    </div>   
                </div>    
            </div>
            <!---Find My MakeUp Description--->
            <div class="flex-1 p-4 h-[350px]">
                <div class="drop-shadow-2xl">
                     <h1 class="font-bold text-6xl font-abril mt-2 text-rose-900 ">Find My MakeUp</h1>
                </div>
              
               <p class="mt-7 font-abril text-lg">Find Your Perfect Matches!</p>
               <p class="font-abril text-lg">FInd My Makeup is one of our features for you as a smart solution to find the makeup products that suit you best. In just a few clicks, we'll match your skin and preferences with the perfect product for you, ensuring flawless results every time. Let us help bring out your natural beauty and make you look stunning!</p>
               
               <button 
                            type="button" 
                            class="bg-rose-50  shadow-lg hover:bg-rose-400 hover:border-rose-400 hover:text-white text-stone-600 font-bold py-2 px-4 rounded-full  border-[3px] border-rose-300 w-60 h-10 flex items-center justify-center mt-6"
                             
                            onclick="window.location.href='{{ route('fmm') }}';">
                            Find My Makeup!
                        </button>

                        
                       
            </div>
        </div>
    </section>

    <!---Categories--->
    <section class="bg-rose-100 p-[30px]">
        <div class="bg-white p-[30px] justify-center rounded-xl drop-shadow-2xl items-center flex flex-col">
            <div class="justify-center items-center">
                <h2 class="font-bold text-6xl font-abril text-rose-700">Categories</h2>
            </div>
            <div class="max-w-4xl mx-auto grid grid-cols-5 gap-10 mt-10 justify-center items-center mb-10 text-custom-color-text">
                <a href="{{ route('complexion') }}" class="flex flex-col items-center overflow-hidden">
                    <div class="h-[200px] w-[150px] flex justify-center items-center border-[5px] border-rose-900 drop-shadow-xl rounded-full">
                        <img src="{{ asset('categories/complexion.jpeg') }}" class="w-full h-full object-cover object-center rounded-full" />
                    </div>
                    <p class="mt-2 text-xl font-bold font-abril">Complexion</p>
                </a>
                <a href="{{ route('fmm') }}" class="flex flex-col items-center overflow-hidden">
                    <div class="h-[200px] w-[150px] flex justify-center items-center border-[5px] border-rose-900 drop-shadow-xl rounded-full">
                        <img src="{{ asset('categories/eye.jpeg') }}" class="w-full h-full object-cover object-center rounded-full" />
                    </div>
                    <p class="mt-2 text-xl font-bold font-abril">Eye</p>
                </a>
                <a href="{{ route('fmm') }}" class="flex flex-col items-center overflow-hidden">
                    <div class="h-[200px] w-[150px] flex justify-center items-center border-[5px] border-rose-900 drop-shadow-xl rounded-full">
                        <img src="{{ asset('categories/lip.jpeg') }}" class="w-full h-full object-cover object-center rounded-full" />
                    </div>
                    <p class="mt-2 text-xl font-bold font-abril">Lip</p>
                </a>
                <a href="{{ route('fmm') }}" class="flex flex-col items-center overflow-hidden">
                    <div class="h-[200px] w-[150px] flex justify-center items-center border-[5px] border-rose-900 drop-shadow-xl rounded-full">
                        <img src="{{ asset('categories/face.jpeg') }}" class="w-full h-full object-cover object-center rounded-full" />
                    </div>
                    <p class="mt-2 text-xl font-bold font-abril">Face</p>
                </a>
                <a href="{{ route('fmm') }}" class="flex flex-col items-center overflow-hidden">
                    <div class="h-[200px] w-[150px] flex justify-center items-center border-[5px] border-rose-900 drop-shadow-xl rounded-full">
                        <img src="{{ asset('categories/powder.jpeg') }}" class="w-full h-full object-cover object-center rounded-full" />
                    </div>
                    <p class="mt-2 text-xl font-bold font-abril">Powder</p>
                </a>
            </div>
            <div class="flex flex-col justify-center items-center">
                <h1 class="font-bold font-abril text-2xl text-rose-300 drop-shadow-xl text-center max-w-2xl">Discover your perfect products by exploring each category!</h1>
                <p class="font-abril text-lg mt-3 text-center max-w-2xl ">For every product you view, you'll find reviews from other users. Let their experiences help you find the perfect products just for you!
                </p>
            </div>
        </div>
            
    </section>        



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
</x-app-layout>
