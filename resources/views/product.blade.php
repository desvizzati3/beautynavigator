<x-app-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <section class="bg-rose-50 py-8">
        <article
            class="relative max-w-screen-lg mx-auto bg-rose-100 border-[5px] border-rose-800 shadow-md rounded-lg overflow-hidden">
            <!-- Tombol Back -->
            <button
                class="absolute top-4 left-4 bg-white hover:bg-rose-800 text-gray-700 hover:text-white font-abril font-bold py-2 px-4 rounded-full shadow-lg"
                onclick="window.history.back()">
                X
            </button>

            <div class="flex flex-col items-center p-8">
                <!-- Gambar Produk -->
                <div class="drop-shadow-2xl h-[400px] w-[300px]">
                    @php
                        // Menentukan path gambar
                        $imagePath = '';
                        if (strpos($product->image, 'produk/') === 0) {
                            // Jika gambar ada di folder 'produk/'
                            $imagePath = asset($product->image);
                        } else {
                            // Jika gambar ada di folder 'storage/post-images'
                            $imagePath = asset('storage/' . $product->image);
                        }
                    @endphp
                    <img src="{{ $imagePath }}"
                        alt="{{ $product->nama_produk }}"class="h-full w-full object-cover rounded-lg border-[3px] border-rose-700"
                        src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
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
                        {{ $product->harga }}</span>
                </div>

                <!-- Detail -->
                <div class="mb-8">
                    <p class="text-lg font-abril text-gray-700"><b>Brand:</b> {{ $product->brand }}</p>
                    <p class="text-lg font-abril text-gray-700"><b>Skintone:</b> {{ $product->skintone->nama }}</p>
                    <p class="text-lg font-abril text-gray-700"><b>Undertone:</b> {{ $product->undertone->nama }}</p>
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
                                    <p class="text-l font-abril font-semibold text-gray-700">Ditulis oleh:
                                        {{ $review->user->name }}</p>
                                    <p class="text-lg font-abril font-medium text-gray-800">{{ $review->isi }}</p>
                                    <p class="text-sm font-abril text-gray-500">
                                        {{ $review->created_at->format('j F Y') }}</p>

                                    @can('admin')
                                        <form action="{{ route('review.destroy', $review->id) }}" method="post">
                                            @method('delete')
                                            @csrf
                                            <button onclick="return confirm('Are you sure?')">
                                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="20" height="20" class="mt-3" viewBox="0 0 30 30">
                                                    <path d="M 14.984375 2.4863281 A 1.0001 1.0001 0 0 0 14 3.5 L 14 4 L 8.5 4 A 1.0001 1.0001 0 0 0 7.4863281 5 L 6 5 A 1.0001 1.0001 0 1 0 6 7 L 24 7 A 1.0001 1.0001 0 1 0 24 5 L 22.513672 5 A 1.0001 1.0001 0 0 0 21.5 4 L 16 4 L 16 3.5 A 1.0001 1.0001 0 0 0 14.984375 2.4863281 z M 6 9 L 7.7929688 24.234375 C 7.9109687 25.241375 8.7633438 26 9.7773438 26 L 20.222656 26 C 21.236656 26 22.088031 25.241375 22.207031 24.234375 L 24 9 L 6 9 z"></path>
                                                </svg>
                                            </button>
                                        </form>
                                    @endcan
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
        <form action="{{ route('review.store', $product->id) }}" method="POST" id="review-form">
            @csrf
            <textarea id="review" name="isi" placeholder="Enter your review for this product"
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
