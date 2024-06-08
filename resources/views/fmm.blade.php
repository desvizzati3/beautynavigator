<x-app-layout>
    <section class="flex flex-col min-h-screen bg-center bg-cover bg-fixed bg-blend-overlay bg-white/50" style="background-image: url('{{ asset('fmm_bg.jpg') }}')">
        <div class="text-white p-8 max-w-lg ml-32 mt-[80px]">
            <div class="text-left mb-6">
                <h2 class="text-7xl font-abril font-bold text-rose-900">Find My Makeup!</h2>
                <p class="text-rose-800 mt-3 font-medium font-abril text-2xl drop-shadow-2xl">Let us know your skin tone and undertone to find the perfect products for you!</p>
            </div>
            <form>
                <div class="mb-4">
                    <div class="relative inline-block text-left w-full">
                        <button type="button" class="inline-flex items-center w-full h-10 justify-center gap-x-1.5 rounded-md bg-white text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 hover:text-gray-700" id="menu-button-skintone" aria-expanded="false" aria-haspopup="true" onclick="toggleDropdown('menu-skintone', 'menu-button-skintone')">
                            <span id="dropdown-selected-skintone">Skintone</span>
                            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="absolute right-0 z-10 mt-2 w-full origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button-skintone" id="menu-skintone">
                            <div class="py-1" role="none">
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" onclick="selectOption('Fair - Light', 'dropdown-selected-skintone', 'menu-skintone', 'menu-button-skintone')">Fair - Light</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" onclick="selectOption('Medium - Tan', 'dropdown-selected-skintone', 'menu-skintone', 'menu-button-skintone')">Medium - Tan</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" onclick="selectOption('Dark - Deep', 'dropdown-selected-skintone', 'menu-skintone', 'menu-button-skintone')">Dark - Deep</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" onclick="selectOption('All', 'dropdown-selected-skintone', 'menu-skintone', 'menu-button-skintone')">All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <div class="relative inline-block text-left w-full">
                        <button type="button" class="inline-flex items-center w-full h-10 justify-center gap-x-1.5 rounded-md bg-white text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50 hover:text-gray-700" id="menu-button-undertone" aria-expanded="false" aria-haspopup="true" onclick="toggleDropdown('menu-undertone', 'menu-button-undertone')">
                            <span id="dropdown-selected-undertone">Undertone</span>
                            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </button>
                        <div class="absolute right-0 z-10 mt-2 w-full origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" role="menu" aria-orientation="vertical" aria-labelledby="menu-button-undertone" id="menu-undertone">
                            <div class="py-1" role="none">
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" onclick="selectOption('Cool', 'dropdown-selected-undertone', 'menu-undertone', 'menu-button-undertone')">Cool</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" onclick="selectOption('Neutral', 'dropdown-selected-undertone', 'menu-undertone', 'menu-button-undertone')">Neutral</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" onclick="selectOption('Warm', 'dropdown-selected-undertone', 'menu-undertone', 'menu-button-undertone')">Warm</a>
                                <a href="#" class="text-gray-700 block px-4 py-2 text-sm hover:bg-gray-100 hover:text-gray-900" role="menuitem" tabindex="-1" onclick="selectOption('All', 'dropdown-selected-undertone', 'menu-undertone', 'menu-button-undertone')">All</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-4">
                    <button type="button" class="w-32 h-10 bg-rose-400 shadow-xl text-white text-sm font-semibold rounded-full hover:bg-rose-800 hover:text-gray-300" onclick="submitSelections()">Submit</button>
                </div>
            </form>
        </div>
    </section>

    <!---Products Recomandation--->
    <section id="results-section" class="hidden bg-white p-8">
        <div class="bg-rose-200 p-[30px] justify-center rounded-xl drop-shadow-2xl items-center flex flex-col">
            <div class="text-center mb-6">
                <h2 class="text-4xl font-bold text-gray-800 font-abril">Your Recommended Products</h2>
            </div>
            <div id="results-content" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Product recommendations will be inserted here -->
                
            </div>
            <div class="justify-center items-center flex mt-6">
                <button onclick="window.location.href='{{ route('fmm') }}';" class="bg-white shadow-lg hover:bg-rose-800 hover:text-white font-bold font-abril  text-rose-800 rounded-full w-28 h-10">
                    Finish!
                </button>
            </div>
        </div>
    </section>
    
</x-app-layout>
<script>
    function toggleDropdown(menuId, buttonId) {
        const menu = document.getElementById(menuId);
        const button = document.getElementById(buttonId);
        const isOpen = menu.classList.contains('hidden');
        menu.classList.toggle('hidden', !isOpen);
        button.setAttribute('aria-expanded', isOpen);
    }

    function selectOption(option, selectedId, menuId, buttonId) {
        document.getElementById(selectedId).innerText = option;
        document.getElementById(menuId).classList.add('hidden');
        document.getElementById(buttonId).setAttribute('aria-expanded', 'false');
    }

    function submitSelections() {
        const skintone = document.getElementById('dropdown-selected-skintone').innerText;
        const undertone = document.getElementById('dropdown-selected-undertone').innerText;

        // Show the results section
        const resultsSection = document.getElementById('results-section');
        resultsSection.classList.remove('hidden');

        // Add product recommendations
        const resultsContent = document.getElementById('results-content');
        resultsContent.innerHTML = `
            <div class="bg-white p-4 rounded-md shadow-md">
                <h3 class="text-xl font-semibold text-gray-800">Product 1</h3>
                <p class="text-gray-600">Recommended for ${skintone} skin tone and ${undertone} undertone.</p>
            </div>
            <div class="bg-white p-4 rounded-md shadow-md">
                <h3 class="text-xl font-semibold text-gray-800">Product 2</h3>
                <p class="text-gray-600">Recommended for ${skintone} skin tone and ${undertone} undertone.</p>
            </div>
            <div class="bg-white p-4 rounded-md shadow-md">
                <h3 class="text-xl font-semibold text-gray-800">Product 3</h3>
                <p class="text-gray-600">Recommended for ${skintone} skin tone and ${undertone} undertone.</p>
            </div>
        `;
    }

    // Close dropdown when clicking outside
    window.onclick = function(event) {
        if (!event.target.matches('#menu-button-skintone') && !event.target.matches('#menu-button-undertone') && !event.target.matches('#menu-skintone a') && !event.target.matches('#menu-undertone a')) {
            const menuSkintone = document.getElementById('menu-skintone');
            const menuButtonSkintone = document.getElementById('menu-button-skintone');
            const menuUndertone = document.getElementById('menu-undertone');
            const menuButtonUndertone = document.getElementById('menu-button-undertone');

            if (!menuSkintone.classList.contains('hidden')) {
                menuSkintone.classList.add('hidden');
                menuButtonSkintone.setAttribute('aria-expanded', 'false');
            }

            if (!menuUndertone.classList.contains('hidden')) {
                menuUndertone.classList.add('hidden');
                menuButtonUndertone.setAttribute('aria-expanded', 'false');
            }
        }
    }
</script>
