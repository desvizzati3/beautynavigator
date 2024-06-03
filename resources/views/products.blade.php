<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    @foreach ($products as $product)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/products/{{ $product->id }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $product['nama_produk'] }}</h2>
            </a>
            <div class="text-base">
                <a href="#" class="hover:underline text-gray-500">Brand:
                    {{ $product['brand'] }}</a>
                |
                {{ $product->created_at->diffForHumans() }}
                <br>
                <p class="text-green-700">Category: {{ $product->category->nama }}</p>
                <p class="text-pink-600">Undertone: {{ $product->undertone->nama }}</p>
                <p class="text-pink-600">Skintone: {{ $product->skintone->nama }}</p>
            </div>
            {{-- <p class="my-4 font-light">{{ Str::limit($product['deskripsi'], 150) }}</p> --}}
        </article>
    @endforeach

</x-layout>
