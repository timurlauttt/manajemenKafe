<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Tambah/Edit Menu</title>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="w-full max-w-lg bg-white p-8 rounded-lg shadow-lg">
        <h1 class="text-2xl font-bold text-center mb-6">Tambah / Edit Item Menu</h1>

        <!-- Form -->
        <form action="#" method="POST">
            <!-- Input Nama -->
            <div class="mb-4">
                <label for="name" class="block text-gray-700 font-semibold mb-2">Nama</label>
                <input type="text" id="name" name="name" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400" 
                       placeholder="Nama menu" required />
            </div>

            <!-- Input Deskripsi -->
            <div class="mb-4">
                <label for="description" class="block text-gray-700 font-semibold mb-2">Deskripsi</label>
                <textarea id="description" name="description" 
                          class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400" 
                          rows="3" placeholder="Deskripsi menu" required></textarea>
            </div>

            <!-- Input Harga -->
            <div class="mb-4">
                <label for="price" class="block text-gray-700 font-semibold mb-2">Harga</label>
                <input type="number" id="price" name="price" min="0" 
                       class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400" 
                       placeholder="Harga menu (Rp)" required />
            </div>

            <!-- Pilihan Kategori -->
            <div class="mb-4">
                <label for="category" class="block text-gray-700 font-semibold mb-2">Kategori</label>
                <select id="category" name="category" 
                        class="w-full px-4 py-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-400" required>
                    <option value="">Pilih Kategori</option>
                    <option value="makanan">Makanan</option>
                    <option value="minuman">Minuman</option>
                    <option value="snack">Snack</option>
                </select>
            </div>

            <!-- Tombol Aksi -->
            <div class="flex justify-between mt-6">
                <button type="submit" 
                        class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition-all duration-300">
                    Simpan
                </button>
                <a href="{{ route('indexMenu') }}">
                    <button type="button" class="bg-gray-400 text-white px-6 py-2 rounded-lg hover:bg-gray-500 transition-all duration-300">
                        Batal
                    </button>
                </a>
            </div>
        </form>
    </div>
</body>
</html>
