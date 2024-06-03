<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <article class="py-8 max-w-screen-md">

        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $product['nama_produk'] }}</h2>

        <div class="text-base">
            <a href="#" class="hover:underline  text-gray-500">Brand: {{ $product['brand'] }}</a>
            <p class="text-green-700">Category: {{ $product->category->nama }}</p>
            <p class="text-pink-600">Undertone: {{ $product->undertone->nama }} | Skintone:
                {{ $product->skintone->nama }}</p>
            <hr style="border-top: 2px solid gray;" class="mt-5 mb-2">
            <p class="text-lg text-gray-500">Deskripsi Produk</p>
            <p class="text-lg font-medium">{{ $product->deskripsi }}</p>
            <p class="text-sm text-gray-500">{{ $product->created_at->format('j F Y') }}</p>
        </div>
        {{-- <p class="my-4 font-light">{{ $product['deskripsi'] }}</p> --}}
        <a href="/products" class="font-medium text-blue-500 hover:underline">&laquo; Back to products</a>

        <section class="mt-20">
            <hr style="border-top: 2px solid gray;">
            <h3 class="text-2xl font-semibold text-center">--- Review ---</h3>
            <hr style="border-top: 2px solid gray;">
            @if ($product->review->isEmpty())
                <p class="text-gray-500">
                    Belum ada review.</p>
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

</x-layout>
