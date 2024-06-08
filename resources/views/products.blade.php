<x-app-layout>
    <x-slot:title>{{ $title }}</x-slot>
<div class="bg-rose-50">
    <section class="py-8 max-w-screen-lg mx-auto ">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($products as $product)
                <article class="bg-rose-100 shadow-md rounded-lg overflow-hidden">
                    <a href="/products/{{ $product->id }}" class="hover:underline font-abril">
                        <img src="{{ $product->image }}" alt="{{ $product->nama_produk }}" class="w-full h-48 object-cover rounded-lg border-[3px] border-rose-800">
                        <div class="p-4">
                            <h3 class="text-lg font-semibold font-abril">{{ $product->nama_produk }}</h3>
                            <p class="text-gray-600 font-abril">{{ $product->description }}</p>
                            <p class="text-gray-900 font-bold mt-2 font-abril">{{ $product->price }}</p>
                        </div>
                    </a>
                </article>
            @endforeach
        </div>
    </section>
</div>
</x-app-layout>



<!--- yg lama 
    <x-app-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <section>
        <div>
            @foreach ($products as $product)
            <article class="py-8 max-w-screen-md border-b border-gray-300">
                <a href="/products/{{ $product->id }}" class="hover:underline">
                    <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $product['nama_produk'] }}</h2>
                    <img src="{{ $product->image }}" alt="{{ $product->nama_produk }}" class="w-full h-48 object-cover">
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
        </div>
    </section>
    


</x-app-layout>
    
    
    
    --->
















