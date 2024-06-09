<x-app-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="bg-rose-50">

        {{-- button create --}}
        <center>
            <button class="bg-rose-800 hover:bg-rose-600 text-white font-bold py-2 px-4 mt-10 rounded">
                <a href="/product/create">Create Product</a>
            </button>
        </center>

        <section class="py-8 max-w-screen-lg mx-auto ">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($products as $product)
                    <article class="bg-rose-100 shadow-md rounded-lg overflow-hidden">
                        <a href="/products/{{ $product->id }}" class="hover:underline font-abril">
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->nama_produk }}"
                                class="w-full h-48 object-cover rounded-lg border-[3px] border-rose-800">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold font-abril">{{ $product->nama_produk }}</h3>
                                {{-- <p class="text-gray-600 font-abril">{{ $product->deskripsi }}</p> --}}
                                <p class="text-gray-900 font-bold mt-2 font-abril">{{ $product->brand }}</p>

                                {{-- edit --}}
                                <a href="/product/{{ $product->id }}/edit" class="badge bg-warning">Edit</a>

                                {{-- delete --}}
                                <form action="/product/{{ $product->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button onclick="return confirm('Are you sure?')">Delete</button>
                                </form>

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
    {{-- <x-slot:title>{{ $title }}</x-slot> --}}
    <section>
        <div>
            {{-- @foreach ($products as $product) --}}
            <article class="py-8 max-w-screen-md border-b border-gray-300">
                {{-- <a href="/products/{{ $product->id }}" class="hover:underline"> --}}
                    {{-- <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $product['nama_produk'] }}</h2> --}}
                    {{-- <img src="{{ $product->image }}" alt="{{ $product->nama_produk }}" class="w-full h-48 object-cover"> --}}
                </a>
                <div class="text-base">
                    <a href="#" class="hover:underline text-gray-500">{{-- Brand:
                         {{ $product['brand'] }}</a>
                    |
                    {{-- {{ $product->created_at->diffForHumans() }} --}}
                    <br>
                    {{-- <p class="text-green-700">Category: {{ $product->category->nama }}</p>
                    <p class="text-pink-600">Undertone: {{ $product->undertone->nama }}</p>
                    <p class="text-pink-600">Skintone: {{ $product->skintone->nama }}</p> --}}
                </div>
                {{-- <p class="my-4 font-light">{{ Str::limit($product['deskripsi'], 150) }}</p> --}}
            </article>
    {{-- @endforeach --}}
        </div>
    </section>
    


</x-app-layout>
    
    
    
    --->
