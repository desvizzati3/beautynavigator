<x-app-layout>

    <section class="min-h-screen bg-rose-50 py-8">
        <div class="justify-center flex items-center mt-6">
            <div class="bg-rose-100 w-2/3 shadow-md rounded-lg border-[5px] border-rose-800 p-6">
                <h2 class="text-4xl font-bold font-abril mb-6 text-center">Edit Produk</h2>
                <form action="/product/{{ $product->id }}" method="POST" enctype="multipart/form-data">
                    @method('put')
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Kolom Pertama -->
                        <div>
                            <!-- Input Nama Produk -->
                            <div class="mb-4">
                                <label for="nama_produk" class="block text-sm font-medium text-gray-700">Nama
                                    Produk</label>
                                <input type="text" name="nama_produk" id="nama_produk"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required value="{{ old('nama_produk', $product->nama_produk) }}">
                            </div>

                            <!-- Input Nama Brand -->
                            <div class="mb-4">
                                <label for="brand" class="block text-sm font-medium text-gray-700">Brand</label>
                                <input type="text" name="brand" id="brand"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required value="{{ old('brand', $product->brand) }}">
                            </div>

                            <!-- Input Deskripsi -->
                            <div class="mb-4">
                                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" rows="3"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required>{{ old('deskripsi', $product->deskripsi) }}</textarea>
                            </div>

                            <!-- Input Nama Brand -->
                            <div class="mb-4">
                                <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                                <input type="text" name="harga" id="harga"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required value="{{ old('harga', $product->harga) }}">
                            </div>

                            <!-- Input Gambar -->
                            <div class="mb-4">
                                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                                <input type="hidden" name="oldImage" value="{{ $product->image }}">
                                @if ($product->image)
                                    @php
                                        $imagePath = '';
                                        if (strpos($product->image, 'produk/') === 0) {
                                            $imagePath = asset($product->image);
                                        } else {
                                            $imagePath = asset('storage/' . $product->image);
                                        }
                                    @endphp
                                    <img src="{{ $imagePath }}" alt="{{ $product->nama_produk }}"
                                        class="img-preview flex w-auto mb-3 h-[100px] sm:col-span-5">
                                @else
                                    <img class="img-preview flex w-auto mb-3 h-[100px] sm:col-span-5"
                                        style="display: none;">
                                @endif
                                <input type="file" name="image" id="image"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    onchange="previewImage()">
                            </div>
                        </div>

                        <!-- Kolom Kedua -->
                        <div>
                            <!-- Dropdown Skintone -->
                            <div class="mb-4">
                                <label for="skintone_id"
                                    class="block text-sm font-medium text-gray-700">Skintone</label>
                                <select name="skintone_id" id="skintone_id"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    required>
                                    @foreach ($skintones as $skintone)
                                        @if (old('skintone_id', $product->skintone_id) == $skintone->id)
                                            <option value="{{ $skintone->id }}" selected>{{ $skintone->nama }}
                                            </option>
                                        @else
                                            <option value="{{ $skintone->id }}">{{ $skintone->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <!-- Dropdown Undertone -->
                            <div class="mb-4">
                                <label for="undertone_id"
                                    class="block text-sm font-medium text-gray-700">Undertone</label>
                                <select name="undertone_id" id="undertone_id"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    required>
                                    @foreach ($undertones as $undertone)
                                        @if (old('undertone_id', $product->undertone_id) == $undertone->id)
                                            <option value="{{ $undertone->id }}" selected>{{ $undertone->nama }}
                                            </option>
                                        @else
                                            <option value="{{ $undertone->id }}">{{ $undertone->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <!-- Dropdown Category -->
                            <div class="mb-4">
                                <label for="category_id"
                                    class="block text-sm font-medium text-gray-700">Category</label>
                                <select name="category_id" id="category_id"
                                    class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    required>
                                    @foreach ($categories as $category)
                                        @if (old('category_id', $product->category_id) == $category->id)
                                            <option value="{{ $category->id }}" selected>{{ $category->nama }}
                                            </option>
                                        @else
                                            <option value="{{ $category->id }}">{{ $category->nama }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>

                            <!-- Tombol Submit -->
                            <div class="mt-6">
                                <button type="submit"
                                    class="inline-flex justify-center py-2 px-4 border-[2px] border-rose-200 shadow-sm text-sm font-medium rounded-full text-white bg-rose-800 hover:bg-rose-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-rose-300">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <script>
        function previewImage() {
            const image = document.querySelector('#image'); //ambil inputan image
            const imgPreview = document.querySelector('.img-preview'); //ambil class img-preview

            imgPreview.style.display = 'block'; //membuat display untuk img previewnya

            const oFReader = new FileReader(); //mengambil data inputan image
            oFReader.readAsDataURL(image.files[0]); //mengambilnya berupa nama url image inputannya

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
</x-app-layout>
