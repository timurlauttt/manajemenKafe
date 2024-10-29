<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Kelola Menu - Admin</title>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col items-center p-8">
    <h1 class="font-extrabold text-3xl mb-8">Kelola Item Menu</h1>

    <!-- Tombol Tambah Menu -->
    <div class="w-full max-w-4xl flex justify-end mb-4">
        <a href="{{ route('formMenu') }}">
            <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition-all">
                + Tambah Menu
            </button>
        </a>
    </div>

    <!-- Tabel Menu -->
    <div class="w-full max-w-4xl bg-white rounded-lg shadow-lg overflow-hidden">
        <table class="min-w-full border-collapse border border-gray-300">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-left">#</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Nama</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Kategori</th>
                    <th class="border border-gray-300 px-4 py-2 text-right">Harga (Rp)</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh Baris Menu -->
                <tr>
                    <td class="border border-gray-300 px-4 py-2">1</td>
                    <td class="border border-gray-300 px-4 py-2">Nasi Goreng</td>
                    <td class="border border-gray-300 px-4 py-2">Makanan</td>
                    <td class="border border-gray-300 px-4 py-2 text-right">25,000</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <button class="bg-yellow-500 text-white px-3 py-1 rounded-lg hover:bg-yellow-600 transition-all">
                            Edit
                        </button>
                        <button class="bg-red-600 text-white px-3 py-1 rounded-lg hover:bg-red-700 transition-all ml-2">
                            Hapus
                        </button>
                    </td>
                </tr>
                <!-- Tambahkan baris lainnya di sini -->
            </tbody>
        </table>
    </div>
</body>
</html>
