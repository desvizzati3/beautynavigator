<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="flex items-center justify-center">
        <div class="text-white mt-10 p-10 rounded-lg shadow-lg flex items-center justify-between max-w-4xl w-full" style="background: linear-gradient(to left, #ffffff, #c93b76);">
            <div class="space-y-6">
                <div>
                    <div class="text-4xl font-bold font-stonewaller">Welcome!</div>
                    <p class="mt-4 text-xl text-white-300 w-1/2">Please insert your Undertone and Skintone <3!</p>
                </div>
            </div>
            <div class="bg-pink-400 p-8 rounded-lg shadow-md w-3/4 h-128">
                <div class="text-xl font-bold mb-4">Your Skintone & Undertone</div>
                <form>
                    <div class="mb-4">
                        <label class="block text-white mb-2" for="undertone">Your Undertone</label>
                        <select id="undertone" name="undertone" class="w-full p-2 rounded-lg bg-white text-black focus:outline-none focus:ring-2 focus:ring-purple-500 cursor-pointer">
                            
                                <option value="Warm" >Warm</option>
                                <option value="Neutral" >Neutral</option>
                                <option value="Cool" >Cool</option>
                            
                        </select>
                    </div>
                    <div class="mb-4">
                        <label class="block text-white mb-2" for="skintone">Your Skintone</label>
                        <select id="skintone" name="skintone" class="w-full p-2 rounded-lg bg-white text-black focus:outline-none focus:ring-2 focus:ring-purple-500 cursor-pointer">
                            <option value="Fair">Fair</option>
                            <option value="Light">Light</option>
                            <option value="Medium">Medium</option>
                            <option value="Tan">Tan</option>
                            <option value="Deep">Deep</option>
                        </select>
                    </div>
                    <button type="submit" onclick="showProductResult(event)" class="w-full bg-gradient-to-r bg-yellow-300 text-custom-color-text-2 py-2 px-4 rounded-lg hover:bg-yellow-400 hover:text-white mt-5 font-bold">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <!-- Product Result -->
    <div id="productResult" class="mt-20 w-screen bg-yellow-200 mb-0" style="display: none;">
        <div class="justify-center items-center flex mt-0">
            <h1 class="text-6xl font-bold text-custom-color-text-2 font-stonewaller mt-10">Your Perfect Match</h1>
        </div>
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="flex flex-wrap gap-10 justify-center grid-cols-1 sm:grid-cols-2 lg:grid-cols-3">
                <!-- Product 1 -->
                <div class="p-6 rounded-lg shadow-lg bg-cyan-100 w-64 flex flex-col">
                    <img src="https://via.placeholder.com/150" alt="Somethinc Hooman Cushion" class="w-full h-40 object-cover mb-4 rounded">
                    <div style="height: 3rem;">
                        <h3 class="text-lg font-medium text-custom-color-text mb-2">Somethinc Hooman Cushion</h3>
                    </div>
                    <div class="mt-auto">
                        <p class="text-custom-color-text mb-2 font-bold" name="shade">Bijoux</p>
                        <p class="text-custom-color-text mb-2 text-xs" name="undertone">Warm</p>
                        <p class="text-custom-color-text mb-2 text-xs mt-0" name="skintone">Light</p>
                        <p class="text-custom-color-text mb-2 text-xs mt-0" name="categories">Cushion/Foundation</p>
                        <!-- Rating stars -->
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-pink-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-3.09 1.64.59-3.45-2.5-2.43 3.46-.5L10 6l1.54 3.16 3.46.5-2.5 2.43.59 3.45z"/></svg>
                                <svg class="w-4 h-4 text-pink-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-3.09 1.64.59-3.45-2.5-2.43 3.46-.5L10 6l1.54 3.16 3.46.5-2.5 2.43.59 3.45z"/></svg>
                                <svg class="w-4 h-4 text-pink-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-3.09 1.64.59-3.45-2.5-2.43 3.46-.5L10 6l1.54 3.16 3.46.5-2.5 2.43.59 3.45z"/></svg>
                                <svg class="w-4 h-4 text-pink-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-3.09 1.64.59-3.45-2.5-2.43 3.46-.5L10 6l1.54 3.16 3.46.5-2.5 2.43.59 3.45z"/></svg>
                                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-3.09 1.64.59-3.45-2.5-2.43 3.46-.5L10 6l1.54 3.16 3.46.5-2.5 2.43.59 3.45z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="p-6 rounded-lg shadow-lg bg-cyan-100 w-64 flex flex-col">
                    <img src="https://via.placeholder.com/150" alt="Somethinc Hooman Breathable Cushion" class="w-full h-40 object-cover mb-4 rounded">
                    <div style="height: 3rem;">
                        <h3 class="text-lg font-medium text-custom-color-text mb-2">Somethinc Hooman Breathable Cushion</h3>
                    </div>
                    <div class="mt-auto">
                        <p class="text-custom-color-text mb-2 font-bold" name="shade">Parfait</p>
                        <p class="text-custom-color-text mb-2 text-xs" name="undertone">Cool</p>
                        <p class="text-custom-color-text mb-2 text-xs mt-0" name="skintone">Fair</p>
                        <p class="text-custom-color-text mb-2 text-xs mt-0" name="categories">Cushion/Foundation</p>
                        <!-- Rating stars -->
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-pink-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-3.09 1.64.59-3.45-2.5-2.43 3.46-.5L10 6l1.54 3.16 3.46.5-2.5 2.43.59 3.45z"/></svg>
                                <svg class="w-4 h-4 text-pink-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-3.09 1.64.59-3.45-2.5-2.43 3.46-.5L10 6l1.54 3.16 3.46.5-2.5 2.43.59 3.45z"/></svg>
                                <svg class="w-4 h-4 text-pink-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-3.09 1.64.59-3.45-2.5-2.43 3.46-.5L10 6l1.54 3.16 3.46.5-2.5 2.43.59 3.45z"/></svg>
                                <svg class="w-4 h-4 text-pink-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-3.09 1.64.59-3.45-2.5-2.43 3.46-.5L10 6l1.54 3.16 3.46.5-2.5 2.43.59 3.45z"/></svg>
                                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-3.09 1.64.59-3.45-2.5-2.43 3.46-.5L10 6l1.54 3.16 3.46.5-2.5 2.43.59 3.45z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="p-6 rounded-lg shadow-lg bg-cyan-100 w-64 flex flex-col">
                    <img src="https://via.placeholder.com/150" alt="Emina Bare With Me Mineral Compact Powder" class="w-full h-40 object-cover mb-4 rounded">
                    <div style="height: 3rem;">
                        <h3 class="text-lg font-medium text-custom-color-text mb-2">Emina Bare With Me Mineral Compact Powder</h3>
                    </div>
                    <div class="mt-auto">
                        <p class="text-custom-color-text mb-2 font-bold" name="shade">Latte</p>
                        <p class="text-custom-color-text mb-2 text-xs" name="undertone">Neutral</p>
                        <p class="text-custom-color-text mb-2 text-xs mt-0" name="skintone">Medium</p>
                        <p class="text-custom-color-text mb-2 text-xs mt-0" name="categories">Powder</p>
                        <!-- Rating stars -->
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-pink-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-3.09 1.64.59-3.45-2.5-2.43 3.46-.5L10 6l1.54 3.16 3.46.5-2.5 2.43.59 3.45z"/></svg>
                                <svg class="w-4 h-4 text-pink-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-3.09 1.64.59-3.45-2.5-2.43 3.46-.5L10 6l1.54 3.16 3.46.5-2.5 2.43.59 3.45z"/></svg>
                                <svg class="w-4 h-4 text-pink-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-3.09 1.64.59-3.45-2.5-2.43 3.46-.5L10 6l1.54 3.16 3.46.5-2.5 2.43.59 3.45z"/></svg>
                                <svg class="w-4 h-4 text-pink-500" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-3.09 1.64.59-3.45-2.5-2.43 3.46-.5L10 6l1.54 3.16 3.46.5-2.5 2.43.59 3.45z"/></svg>
                                <svg class="w-4 h-4 text-gray-300" fill="currentColor" viewBox="0 0 20 20"><path d="M10 15l-3.09 1.64.59-3.45-2.5-2.43 3.46-.5L10 6l1.54 3.16 3.46.5-2.5 2.43.59 3.45z"/></svg>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Add more products as needed -->
            </div>
        </div>
    </div>

    <!---Thank You---->
    <div class="flex justify-center items-center">
    <div id="thankYouSection"  class="flex flex-col  justify-center items-center mt-10 mb-10" style="display: none;">
        <h1 class="text-5xl font-bold font-stonewaller text-white ">Thank You for Using Our Feature! 💖 </h1>
        <p class="mt-3 text-white font-bold text-xl font-stonewaller">-xo, Beauty Navigator 💌</p>

        <button 
            type="button" class="bg-yellow-200 hover:bg-pink-600 hover:text-white text-custom-color-text-2 font-bold py-2 px-4 rounded-full w-60 h-10 flex items-center justify-center mt-5" onclick="window.location.href='{{ route('fmm') }}';">
                           Finish!
        </button>
    </div>
    


   <script>
    function showProductResult(event) {
        event.preventDefault();
        document.getElementById('productResult').style.display = 'block';
        document.getElementById('thankYouSection').style.display = 'block';
        document.getElementById('form').style.display = 'none';
    }

    function resetForm() {
        document.getElementById('productResult').style.display = 'none';
        document.getElementById('thankYouSection').style.display = 'none';
        document.getElementById('form').style.display = 'block';
        document.getElementById('form').reset();
    }
</script>
</x-layout>
