
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



    <!-- Back/Next -->
    <div class="absolute inset-0 flex">
        <div class="flex items-center justify-start w-1/2">
            <button 
            x-on:click="activeSlide = activeSlide === 1 ? slides.length : activeSlide - 1"
            class="bg-slate-100 text-slate-500 hover:bg-blue-500 hover:text-white transition font-bold rounded-full w-12 h-12 shadow items-center text-center flex justify-center -ml-16">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
                </svg>
            </button>
        </div>
        <div class="flex items-center justify-end w-1/2">
            <button 
            x-on:click="activeSlide = activeSlide === slides.length ? 1 : activeSlide + 1"
            class="bg-slate-100 text-slate-500 hover:bg-blue-500 hover:text-white transition font-bold rounded-full w-12 h-12 shadow items-center text-center flex justify-center -mr-16">
               <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
               </svg>
            </button>
        </div>
    </div>

    <!-- Buttons -->
    <div class="absolute w-full flex items-center justify-center px-4 mt-3">
        <template x-for="slide in slides" :key="slide.id">
            <button class="bg-white p-1 rounded-full" :class="{
                'bg-blue-600' : activeSlide === slide.id,
                'bg-slate-300' : activeSlide !== slide.id,
            }"
            x-on:click="activeSlide = slide.id"
            >

            </button>
        </template>
    </div>
    
</x-layout>

