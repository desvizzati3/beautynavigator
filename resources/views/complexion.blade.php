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