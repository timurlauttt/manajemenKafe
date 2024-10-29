<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Kelola Pengguna - Admin</title>
</head>
<body class="bg-gray-100 min-h-screen p-8">
    <div class="max-w-5xl mx-auto bg-white p-6 rounded-lg shadow-lg">
        <h1 class="text-4xl font-extrabold text-center mb-8">Daftar Pengguna</h1>

        <!-- Tombol Tambah Pengguna -->
        <div class="mb-4 text-right">
            <a href="#" class="bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition-all">
                Tambah Pengguna
            </a>
        </div>

        <!-- Tabel Pengguna -->
        <table class="w-full border-collapse border border-gray-300">
            <thead class="bg-gray-200">
                <tr>
                    <th class="border border-gray-300 px-4 py-2 text-left">No</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Nama</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Email</th>
                    <th class="border border-gray-300 px-4 py-2 text-left">Peran</th>
                    <th class="border border-gray-300 px-4 py-2 text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Contoh data statis -->
                <tr>
                    <td class="border border-gray-300 px-4 py-2">1</td>
                    <td class="border border-gray-300 px-4 py-2">Athur</td>
                    <td class="border border-gray-300 px-4 py-2">athur@example.com</td>
                    <td class="border border-gray-300 px-4 py-2">Admin</td>
                    <td class="border border-gray-300 px-4 py-2 text-center space-x-2">
                        <a href="#" class="text-blue-600 hover:underline">Edit</a>
                        <button class="text-red-600 hover:underline">Hapus</button>
                    </td>
                </tr>
                <!-- Baris tambahan bisa diisi secara dinamis -->
            </tbody>
        </table>
    </div>
</body>
</html>
