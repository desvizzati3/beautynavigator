<x-layout>
    <x-slot name="title">{{ $title }}</x-slot>

    <div class="max-w-4xl mx-auto relative" x-data="{ 
        activeSlide: 1,
        slides:[
            {id: 1, image: 'bn_jumb.png'},
            {id: 2, image: 'bn_jumb.png'},
            {id: 3, image: 'fmm_jumb_pink.png'},
            {id: 4, image: 'fmm_jumb_pink.png'}
        ],
        loop() {
            setInterval(() => {
                this.activeSlide = this.activeSlide === 4 ? 1 : this.activeSlide + 1
            }, 2000)
        }
     }" x-init="loop">
     
        <!-- Slider -->
        <div class="relative h-64">
            <template x-for="slide in slides" :key="slide.id">
                <div x-show="activeSlide === slide.id" class="absolute top-0 w-full h-full flex items-center justify-center text-white rounded-lg" :style="'background: url(' + slide.image + ') no-repeat center center; background-size: cover;'">
                    <div>
                        <h2 class="font-bold text-2xl" x-text="slide.title"></h2>
                        <p x-text="slide.body" class="text-base"></p>
                    </div>
                </div>
            </template>
        </div>

        <!-- Slider Buttons -->
        <div class="flex justify-center mt-4">
            <template x-for="slide in slides" :key="slide.id">
                <button class="mx-1 bg-white p-1 rounded-full" :class="{
                    'bg-blue-600' : activeSlide === slide.id,
                    'bg-slate-300' : activeSlide !== slide.id,
                }" x-on:click="activeSlide = slide.id"></button>
            </template>
        </div>
    </div>

    <!-- Content -->
       <div class="mx-auto w-1/2 text-center mt-10 font-stonewaller">
        <h1 class="font-bold text-6xl text-custom-color-text-2">About Us</h1>
        <p class="mt-10 text-custom-color-text-2 text-xl leading-8">Your favorite Beauty Navigator is here! </p>
        <p class="mt-5 text-custom-color-text-2 text-xl leading-8">We will help you to find make up products whose quality has been recognised by beauty enthusiasts through the reviews they send on the products you are interested in.</p>
        <p class="mt-5 text-custom-color-text-2 text-xl leading-8">Check it Out!</p>
       </div>


        <!-- Red Section with Two Grids -->
        <div class="mt-20 py-10 w-screen " style="background-color: #c1dde1">
            <div class="mx-auto grid grid-cols-2 text-white">
                <div class="relative flex flex-col items-center m-2 ">
                    <!-- Decorative Shape -->
                    <div class="absolute top-0 right-0 transform  -translate-y-0 bg-yellow-200 w-64 h-96 rounded-full z-0" style="transform:translateX(-110px)"></div>
                    <!-- Image -->
                    <img src="{{ asset('redsec.jpg') }}" alt="Description of image" class="w-80 h-128 rounded-full relative z-10">
                </div>
                <div class="flex flex-col items-left">
                    <!-- Content for the second grid -->
                    <div class="mt-10">
                    <h1 class="text-6xl font-bold text-custom-color-text font-stonewaller" >Find My Makeup</h1>
                    </div>
                    <div class="mt-10 mr-30">
                        <h4 class="mt-4 text-custom-color-text">Find Your Make Up is a feature to help you find your makeups perfect match based on your Skintone and Undertone.</h4>
                        <h4 class="mt-1 text-custom-color-text">Make sure you already know your Skintone and Undertone to try the feature.</h4>
                        <h4 class="mt-10 text-custom-color-text">Click the pink button below to Find Your Perfect Match!</h4>
                    
                     <div class="flex justify-start ">
                        
                        <button 
                            type="button" 
                            class="bg-pink-400 hover:bg-pink-600 text-white font-bold py-2 px-4 rounded-full w-60 h-10 flex items-center justify-center mt-5"
                            onclick="window.location.href='{{ route('fmm') }}';">
                            Find My Makeup!
                        </button>
                    </div>
                </div>
                </div>
            </div>
        </div>

        <!-- Grid of Images -->
        <div class="justify-center items-center">
            <h1 class="text-6xl font-bold mt-5 text-center font-stonewaller text-white" style="">Categories</h1>
            <h4 class= "text-center text-1xl mt-5 text-white" style="">Search and find the products you are considering and check out the reviews!</h4>
            <h3 class=" text-2xl text-center mt-10 font-bold text-white" style="">Choose your products based on category:</h3>
        </div>
            <div class="max-w-4xl mx-auto grid grid-cols-5 gap-4 mt-10 justify-center items-center mb-20 text-custom-color-text">
            <a href="{{ route('fmm') }}" class="flex flex-col items-center overflow-hidden">
                <div class="bg-pink-500 rounded-full h-30 w-30 flex justify-center items-center">
                    <img src="{{ asset('categories/lip_product.jpeg') }}" class="w-full h-full object-cover object-center rounded-full" />
                </div>
                <p class="mt-2 font-bold">Lip Product</p>
            </a>
            <a href="{{ route('fmm') }}" class="flex flex-col items-center overflow-hidden">
                <div class="bg-pink-500 rounded-full h-30 w-30 flex justify-center items-center">
                    <img src="{{ asset('categories/powder.jpeg') }}" class="w-full h-full object-cover object-center rounded-full" />
                </div>
                <p class="mt-2 font-bold">Powder</p>
            </a>
            <a href="{{ route('fmm') }}" class="flex flex-col items-center overflow-hidden">
                <div class="bg-pink-500 rounded-full h-30 w-30 flex justify-center items-center">
                    <img src="{{ asset('categories/cushion_foundation.jpeg') }}" class="w-full h-full object-cover object-center rounded-full" />
                </div>
                <p class=" font-bold justify-center text-center">Cushion & Foundation</p>
            </a>
            <a href="{{ route('fmm') }}" class="flex flex-col items-center overflow-hidden">
                <div class="bg-pink-500 rounded-full h-30 w-30 flex justify-center items-center">
                    <img src="{{ asset('categories/eyeshadow.jpeg') }}" class="w-full h-full object-cover object-center rounded-full" />
                </div>
                <p class="mt-2 font-bold">Eyeshadow</p>
            </a>
            <a href="{{ route('fmm') }}" class="flex flex-col items-center overflow-hidden">
                <div class="bg-pink-500 rounded-full h-30 w-30 flex justify-center items-center">
                    <img src="{{ asset('categories/blush.jpeg') }}" class="w-full h-full object-cover object-center rounded-full" />
                </div>
                <p class="mt-2 font-bold">Blush</p>
            </a>
         </div>
        
    
</x-layout>
