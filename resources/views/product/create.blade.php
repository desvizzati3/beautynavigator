<x-app-layout>

    <section class="min-h-screen bg-rose-50 py-8 ">
        <div class="justify-center flex items-center mt-6 ">
            <div class="bg-rose-100 w-2/3 shadow-md rounded-lg border-[5px] border-rose-800 p-6">
                <h2 class="text-4xl font-bold font-abril mb-6 text-center">Tambah Produk</h2>
                <form action="/product" method="POST" enctype="multipart/form-data">
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
                                    required>
                            </div>

                            <!-- Input Nama Brand -->
                            <div class="mb-4">
                                <label for="brand" class="block text-sm font-medium text-gray-700">Brand</label>
                                <input type="text" name="brand" id="brand"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required>
                            </div>

                            <!-- Input Deskripsi -->
                            <div class="mb-4">
                                <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                                <textarea name="deskripsi" id="deskripsi" rows="3"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required></textarea>
                            </div>

                            <!-- Input Nama Brand -->
                            <div class="mb-4">
                                <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                                <input type="text" name="harga" id="harga"
                                    class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                    required>
                            </div>

                            <!-- Input Gambar -->
                            <div class="mb-4">
                                <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                                <img class="img-preview flex w-auto mb-3 h-[100px] sm:col-span-5"
                                    style="display: none;">
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
                                        <option value="{{ $skintone->id }}">{{ $skintone->nama }}</option>
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
                                        <option value="{{ $undertone->id }}">{{ $undertone->nama }}</option>
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
                                        <option value="{{ $category->id }}">{{ $category->nama }}</option>
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
