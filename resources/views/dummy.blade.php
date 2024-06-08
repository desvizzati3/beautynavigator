<x-app-layout>
    <article class="py-8 max-w-screen-md mx-auto bg-white shadow-md rounded-lg overflow-hidden">
        <div class="flex">
            <!-- Gambar Produk -->
            <div class="flex-shrink-0">
                <img class="h-48 w-full object-cover md:h-full md:w-48" src="{{ asset('path/to/image.jpg') }}" alt="Product Image">
            </div>
            
            <!-- Detail Produk -->
            <div class="p-8 flex-1">
                <div class="flex items-center justify-between">
                    <h2 class="text-3xl tracking-tight font-bold text-gray-900">{{ $product['nama_produk'] }}</h2>
                    <span class="text-xl font-semibold text-gray-900">${{ $product['harga'] }}</span>
                </div>
                
                <div class="mt-2 text-base text-gray-500">
                    <a href="#" class="hover:underline text-gray-500">Brand: {{ $product['brand'] }}</a>
                    <p class="text-green-700">Category: {{ $product->category->nama }}</p>
                    <p class="text-pink-600">Undertone: {{ $product->undertone->nama }} | Skintone: {{ $product->skintone->nama }}</p>
                </div>

                <hr class="mt-5 mb-2 border-gray-300">
                
                <div>
                    <p class="text-lg text-gray-500">Deskripsi Produk</p>
                    <p class="text-lg font-medium">{{ $product->deskripsi }}</p>
                    <p class="text-sm text-gray-500">{{ $product->created_at->format('j F Y') }}</p>
                </div>
                
                <a href="/products" class="mt-4 inline-block font-medium text-blue-500 hover:underline">&laquo; Back to products</a>
            </div>
        </div>

        <!-- Bagian Ulasan -->
        <section class="mt-20 px-8">
            <hr class="border-gray-300">
            <h3 class="text-2xl font-semibold text-center mt-6">--- Review ---</h3>
            <hr class="border-gray-300 mt-2">
            
            @if ($product->review->isEmpty())
                <p class="text-gray-500 text-center mt-4">Belum ada review.</p>
            @else
                @foreach ($product->review as $review)
                    <div class="mt-4 border-b pb-4">
                        <p class="text-lg text-gray-500">Ditulis oleh: {{ $review->user->username }}</p>
                        <p class="text-lg font-medium">{{ $review->isi }}</p>
                        <p class="text-sm text-gray-500">{{ $review->created_at->format('j F Y') }}</p>
                    </div>
                @endforeach
            @endif
        </section>
    </article>
</x-app-layout>
