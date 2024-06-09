<x-app-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <section class="bg-rose-50 py-8">
        <article
            class="relative max-w-screen-lg mx-auto bg-rose-100 border-[5px] border-rose-800 shadow-md rounded-lg overflow-hidden">
            <!-- Tombol Back -->
            <button
                class="absolute top-4 left-4 bg-white hover:bg-rose-800 text-gray-700 hover:text-white font-abril font-bold py-2 px-4 rounded-full shadow-lg"
                onclick="window.location.href='{{ route('products') }}';">
                X
            </button>

            <div class="flex flex-col items-center p-8">
                <!-- Gambar Produk -->
                <div class="w-full md:w-1/3 drop-shadow-2xl">
                    <img class="h-full w-full object-cover rounded-lg border-[3px] border-rose-700"
                        src="{{ asset('categories/eye.jpeg') }}" alt="Product Image">
                </div>

                <!-- Tombol Add Review -->
                <x-primary-button class="mt-8 drop-shadow-xl" onclick="openPopup()">
                    Add Review
                </x-primary-button>
            </div>

            <div class="p-8">
                <!-- Detail Produk -->
                <div class="mb-8">
                    <h2 class="text-3xl font-abril tracking-tight font-bold text-gray-900">{{ $product['nama_produk'] }}
                    </h2>
                    <span class="text-xl font-abril font-semibold text-gray-700">Rp.
                        {{ number_format($product['harga'], 0, ',', '.') }}</span>
                </div>

                <!-- Deskripsi Produk -->
                <div class="mb-8">
                    <h3 class="text-2xl font-semibold font-abril text-gray-900 mb-4">Description</h3>
                    <p class="text-lg font-abril text-gray-700">{{ $product->deskripsi }}</p>
                </div>

                <!-- Review Produk -->
                <section class="bg-rose-50 p-6 rounded-lg border-[3px] border-rose-800">
                    <h3 class="text-2xl font-semibold font-abril text-gray-900 mb-4">Reviews</h3>

                    <div id="reviews-container" class="max-h-64 overflow-y-auto">
                        @if ($product->review->isEmpty())
                            <p class="text-gray-500 font-abril text-center mt-4">Belum ada review.</p>
                        @else
                            @foreach ($product->review as $review)
                                <div class="mb-4 border-b pb-4 border-gray-300">
                                    <p class="text-lg font-abril text-gray-700">Ditulis oleh:
                                        {{ $review->user->username }}</p>
                                    <p class="text-lg font-abril font-medium text-gray-800">{{ $review->isi }}</p>
                                    <p class="text-sm font-abril text-gray-500">
                                        {{ $review->created_at->format('j F Y') }}</p>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </section>
            </div>
        </article>
    </section>

    <!-- Overlay -->
    <div id="overlay" class="overlay fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 z-40 hidden"
        onclick="closePopup()"></div>

    <!-- Pop-up Form -->
    <div id="popup"
        class="popup bg-rose-50 p-8 rounded-lg shadow-lg fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 z-50 hidden">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-bold font-abril text-rose-800">Submit Review</h2>
            <button onclick="closePopup()" class="text-gray-500 hover:text-gray-800">&times;</button>
        </div>
        <form action="{{ route('products.reviews.store', $product) }}" method="POST" id="review-form"
            onsubmit="submitReview(event)">
            @csrf
            <textarea id="review" name="review" placeholder="Enter your review for this product"
                class="w-full p-2 border font-abril border-gray-300 rounded-lg mb-4" required></textarea>
            <button type="submit"
                class="bg-rose-800 text-white hover:bg-rose-400 shadow-xl font-abril w-full py-2 rounded-lg">Submit</button>
        </form>
    </div>

    <script>
        function openPopup() {
            document.getElementById('popup').classList.remove('hidden');
            document.getElementById('overlay').classList.remove('hidden');
        }

        function closePopup() {
            document.getElementById('popup').classList.add('hidden');
            document.getElementById('overlay').classList.add('hidden');
        }

        function submitReview(event) {
            event.preventDefault();
            const username = document.getElementById('username').value;
            const review = document.getElementById('review').value;
            const reviewsContainer = document.getElementById('reviews-container');

            const reviewHTML = `
                <div class="mb-4 border-b pb-4 border-gray-300">
                    <p class="text-lg font-abril text-gray-700">Ditulis oleh: ${username}</p>
                    <p class="text-lg font-abril text-gray-800">${review}</p>
                    <p class="text-sm text-gray-500">Just now</p>
                </div>
            `;

            reviewsContainer.innerHTML += reviewHTML;

            // Clear the form
            document.getElementById('review-form').reset();
            closePopup();
        }
    </script>
</x-app-layout>
