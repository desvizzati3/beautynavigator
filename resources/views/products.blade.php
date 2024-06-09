<x-app-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="bg-rose-50 min-h-screen">

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
                            <img src="{{ $product->image }}" alt="{{ $product->nama_produk }}"
                                class="w-full h-48 object-cover rounded-lg border-[3px] border-rose-800">
                            <div class="p-4">
                                <h3 class="text-lg font-semibold font-abril">{{ $product->nama_produk }}</h3>
                                {{-- <p class="text-gray-600 font-abril">{{ $product->deskripsi }}</p> --}}
                                <p class="text-gray-900 font-bold mt-2 font-abril">{{ $product->brand }}</p>
                                <div class="flex gap-3">
                                {{-- edit --}}
                                <a href="/product/{{ $product->id }}/edit" class="badge bg-warning w-3 h-3">
                                    <img src="https://img.icons8.com/?size=100&id=8192&format=png&color=000000" class="h-[22px] w-[22px]">
                                </a>

                                {{-- delete --}}
                                <form action="/product/{{ $product->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button onclick="return confirm('Are you sure?')">
                                        <img src="https://img.icons8.com/?size=100&id=102315&format=png&color=000000" alt="Delete" style="width: 24px; height: 24px;">
                                    </button>
                                </form>
                                </div>
                            </div>
                        </a>
                    </article>
                @endforeach
            </div>
        </section>
    </div>
</x-app-layout>



