<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Dashboard Admin</title>
</head>
<body class="bg-gray-100 min-h-screen p-8">
    <div class="max-w-7xl mx-auto">
        <h1 class="font-extrabold text-4xl text-center mb-8">Dashboard Admin</h1>

        <!-- Ringkasan -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            <!-- Ringkasan Penjualan -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold mb-2">Total Penjualan</h2>
                <p class="text-2xl font-bold text-green-500">Rp 15,000,000</p>
            </div>

            <!-- Jumlah Pesanan -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold mb-2">Jumlah Pesanan</h2>
                <p class="text-2xl font-bold text-blue-500">120</p>
            </div>

            <!-- Jumlah Menu -->
            <div class="bg-white p-6 rounded-lg shadow-md">
                <h2 class="text-lg font-semibold mb-2">Total Menu</h2>
                <p class="text-2xl font-bold text-purple-500">30 Item</p>
            </div>
        </div>

        <!-- Akses ke Manajemen Menu -->
        <div class="flex justify-end">
            <a href="{{ route('indexMenu') }}" class="bg-indigo-600 text-white px-6 py-3 rounded-lg hover:bg-indigo-700 transition-all">
                Manajemen Menu
            </a>
        </div>
    </div>
</body>
</html>
