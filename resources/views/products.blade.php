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
                        <div class="pl-4 pb-0 mt-0">
                            <p class="text-gray-900 font-bold mt-2 font-abril">{{ $product->brand }}</p>
                        </div>
                        @can('admin')
                            <div class="flex gap-3 pl-4 mt-1">
                                {{-- edit --}}
                                <a href="/product/{{ $product->id }}/edit" class="badge bg-white rounded-full w-6 h-6 mb-2 justify-center items-center flex">
                                
                                    
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-4 h-4" viewBox="0 0 24 24">
                                            <path
                                                d="M 19.171875 2 C 18.448125 2 17.724375 2.275625 17.171875 2.828125 L 16 4 L 20 8 L 21.171875 6.828125 C 22.275875 5.724125 22.275875 3.933125 21.171875 2.828125 C 20.619375 2.275625 19.895625 2 19.171875 2 z M 14.5 5.5 L 3 17 L 3 21 L 7 21 L 18.5 9.5 L 14.5 5.5 z">
                                            </path>
                                        </svg>
                                 </a>

                                {{-- delete --}}
                                <form action="/product/{{ $product->id }}" method="post" class="d-inline">
                                    @method('delete')
                                    @csrf
                                    <button onclick="return confirm('Are you sure?')" class="bg-white rounded-full w-6 h-6 mb-2 justify-center items-center flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" class="w-4 h-4" viewBox="0 0 24 24">
                                            <path d="M 10.806641 2 C 10.289641 2 9.7956875 2.2043125 9.4296875 2.5703125 L 9 3 L 4 3 A 1.0001 1.0001 0 1 0 4 5 L 20 5 A 1.0001 1.0001 0 1 0 20 3 L 15 3 L 14.570312 2.5703125 C 14.205312 2.2043125 13.710359 2 13.193359 2 L 10.806641 2 z M 4.3652344 7 L 5.8925781 20.263672 C 6.0245781 21.253672 6.877 22 7.875 22 L 16.123047 22 C 17.121047 22 17.974422 21.254859 18.107422 20.255859 L 19.634766 7 L 4.3652344 7 z"></path>
                                        </svg>
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
