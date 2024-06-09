<div class="max-w-md mx-auto">
    <form action="/product" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Input Nama Produk -->
        <div class="mb-4">
            <label for="nama_produk" class="block text-sm font-medium text-gray-700">Nama Produk</label>
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

        <!-- Input Gambar -->
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
            <input type="file" name="image" id="image"
                class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
        </div>

        <!-- Dropdown Skintone -->
        <div class="mb-4">
            <label for="skintone_id" class="block text-sm font-medium text-gray-700">Skintone</label>
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
            <label for="undertone_id" class="block text-sm font-medium text-gray-700">Undertone</label>
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
            <label for="category_id" class="block text-sm font-medium text-gray-700">Category</label>
            <select name="category_id" id="category_id"
                class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->nama }}</option>
                @endforeach
            </select>
        </div>

        <!-- Tombol Submit -->
        <div class="mt-4">
            <button type="submit"
                class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Submit
            </button>
        </div>
    </form>
</div>
