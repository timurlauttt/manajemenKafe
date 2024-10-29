<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Form Pengguna - Admin</title>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-8">
    <div class="w-full max-w-lg bg-white rounded-lg shadow-lg p-8">
        <h1 class="font-extrabold text-3xl mb-8 text-center">Form Pengguna</h1>
        
        <!-- Form Tambah/Edit Pengguna -->
        <form action="#" method="POST">
            <!-- Input Nama -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-semibold text-gray-700 mb-2">Nama:</label>
                <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded-lg p-3 outline-none focus:border-indigo-600" required>
            </div>

            <!-- Input Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-semibold text-gray-700 mb-2">Email:</label>
                <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded-lg p-3 outline-none focus:border-indigo-600" required>
            </div>

            <!-- Input Password -->
            <div class="mb-4">
                <label for="password" class="block text-sm font-semibold text-gray-700 mb-2">Password:</label>
                <input type="password" id="password" name="password" class="w-full border border-gray-300 rounded-lg p-3 outline-none focus:border-indigo-600" required>
            </div>

            <!-- Input Peran -->
            <div class="mb-6">
                <label for="role" class="block text-sm font-semibold text-gray-700 mb-2">Peran:</label>
                <select id="role" name="role" class="w-full border border-gray-300 rounded-lg p-3 outline-none focus:border-indigo-600" required>
                    <option value="">Pilih Peran</option>
                    <option value="admin">Admin</option>
                    <option value="editor">Editor</option>
                    <option value="viewer">Viewer</option>
                </select>
            </div>

            <!-- Tombol Aksi -->
            <div class="flex justify-between">
                <button type="submit" class="bg-indigo-600 text-white px-6 py-2 rounded-lg hover:bg-indigo-700 transition-all">
                    Simpan
                </button>
                <button type="button" onclick="window.history.back()" class="bg-gray-400 text-white px-6 py-2 rounded-lg hover:bg-gray-500 transition-all">
                    Batal
                </button>
            </div>
        </form>
    </div>
</body>
</html>
