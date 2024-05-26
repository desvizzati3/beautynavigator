<x-layout>
    
    <x-slot name="title">{{ $title }}</x-slot>

     <div class="max-w-4xl mx-auto relative" x-data="{ 
        activeSlide: 1,
        slides:[
            {id: 1, title: 'Hello 1', body: 'lorem ipsum dolor'},
            {id: 2, title: 'Hello 2', body: 'lorem ipsum dolor'},
            {id: 3, title: 'Hello 3', body: 'lorem ipsum dolor'},
            {id: 4, title: 'Hello 4', body: 'lorem ipsum dolor'}
        ],
        loop() {
            setInterval(() => {
                this.activeSlide = this.activeSlide === 4 ? 1 : this.activeSlide + 1
            }, 2000)
        }
     }" 
     x-init="loop"
     >
     <!-- Data Loop -->
        <template x-for="slide in slides" :key="slide.id">
            <div x-show="activeSlide === slide.id" class="p-16 h-64 flex items-center bg-slate-500 text-white rounded-lg">
                <div>
                    <h2 class="font-bold text-2xl" x-text="slide.title"></h2>
                    <p x-text="slide.body" class="text-base"></p>
                </div>
            </div>
        </template>

        <!-- Buttons -->
        <div class="absolute w-full flex items-center justify-center px-4 mt-3">
            <template x-for="slide in slides" :key="slide.id">
                <button class="bg-white p-1 rounded-full" :class="{
                    'bg-blue-600' : activeSlide === slide.id,
                    'bg-slate-300' : activeSlide !== slide.id,
                }" x-on:click="activeSlide = slide.id">
                </button>
            </template>
        </div>
    
        <div class="flex justify-center mt-20 relative z-20">
            <button 
                type="button" 
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-80 h-20 flex items-center justify-center"
                onclick="window.location.href='{{ route('fmm') }}';">
                Find My Makeup!
            </button>
        </div>

        <div class="grid grid-cols-5 gap-4 mt-20 justify-center items-center">
            <div class="flex flex-col items-center overflow-hidden">
                <div class="bg-pink-500 rounded-full h-30 w-30 justify-center items-center">
                    <img src="{{ asset('fotomark.jpg') }}" class="w-full h-full object-cover object-center rounded-full" />
                </div>
                <p class="mt-2">Capt</p>
            </div>
            <div class="flex flex-col items-center overflow-hidden">
                <div class="bg-pink-500 rounded-full h-30 w-30 justify-center items-center">
                    <img src="{{ asset('fotomark.jpg') }}" class="w-full h-full object-cover object-center rounded-full" />
                </div>
                <p class="mt-2">Capt</p>
            </div>
            <div class="flex flex-col items-center overflow-hidden">
                <div class="bg-pink-500 rounded-full h-30 w-30 justify-center items-center">
                    <img src="{{ asset('fotomark.jpg') }}" class="w-full h-full object-cover object-center rounded-full" />
                </div>
                <p class="mt-2">Capt</p>
            </div>
            <div class="flex flex-col items-center overflow-hidden">
                <div class="bg-pink-500 rounded-full h-30 w-30 justify-center items-center">
                    <img src="{{ asset('fotomark.jpg') }}" class="w-full h-full object-cover object-center rounded-full" />
                </div>
                <p class="mt-2">Capt</p>
            </div>
            <div class="flex flex-col items-center overflow-hidden">
                <div class="bg-pink-500 rounded-full h-30 w-30 justify-center items-center">
                    <img src="{{ asset('fotomark.jpg') }}" class="w-full h-full object-cover object-center rounded-full" />
                </div>
                <p class="mt-2">Capt</p>
            </div>        
        </div>

    </div>

    <!-- Footer -->
    <footer class="w-full bg-gray-800 text-white py-8 mt-20">
        <div class="max-w-4xl mx-auto text-center">
            <p>&copy; 2024 Your Company. All rights reserved.</p>
            <p>Contact us: email@example.com</p>
        </div>
    </footer>
    
</x-layout>
