<x-app-layout>
    <x-slot:title>{{ $title }}</x-slot>
    <div class="bg-rose-50 min-h-screen">

        @can('admin')
            {{-- button create --}}
            <center>
                <button class="bg-rose-800 hover:bg-rose-600 text-white font-bold py-2 px-4 mt-10 rounded">
                    <a href="/product/create">Create Product</a>
                </button>
            </center>
        @endcan

        <section class="py-8 max-w-screen-lg mx-auto ">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach ($products as $product)
                    <article class="bg-rose-100 shadow-md rounded-lg overflow-hidden">
                        <a href="/products/{{ $product->id }}" class="hover:underline font-abril">
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
                            <img src="{{ $imagePath }}" alt="{{ $product->nama_produk }}"
                                class="w-full h-48 object-cover rounded-lg border-[3px] border-rose-800">

                            <div class="pt-4 pl-4 pb-0">
                                <h3 class="text-lg font-semibold font-abril">{{ $product->nama_produk }}</h3>
                            </div>
                        </a>
                        {{-- <p class="text-gray-600 font-abril">{{ $product->deskripsi }}</p> --}}
                        <div class="pl-4 pb-1 mt-0">
                            <p class="text-gray-900 font-bold mt-2 font-abril">{{ $product->brand }}</p>
                        </div>
                        @can('admin')
                            <div class="flex gap-3 pl-4 mt-1">
                                {{-- edit --}}
                                <div class="w-7 h-7 bg-white rounded-full">
                                    <a href="/product/{{ $product->id }}/edit" class="badge bg-warning w-3 h-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="5"
                                            height="5" viewBox="0 0 24 24">
                                            <path
                                                d="M 19.171875 2 C 18.448125 2 17.724375 2.275625 17.171875 2.828125 L 16 4 L 20 8 L 21.171875 6.828125 C 22.275875 5.724125 22.275875 3.933125 21.171875 2.828125 C 20.619375 2.275625 19.895625 2 19.171875 2 z M 14.5 5.5 L 3 17 L 3 21 L 7 21 L 18.5 9.5 L 14.5 5.5 z">
                                            </path>
                                        </svg>
                                    </a>
                                </div>


                                {{-- delete --}}
                                <form action="/product/{{ $product->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button onclick="return confirm('Are you sure?')">
                                        <img src="https://img.icons8.com/?size=100&id=102315&format=png&color=000000"
                                            alt="Delete" class="w-4 h-4 ">
                                    </button>
                                </form>
                            </div>
                        @endcan

                    </article>
                @endforeach
            </div>
        </section>
    </div>
</x-app-layout>
