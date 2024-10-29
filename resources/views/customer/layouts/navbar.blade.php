<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <!-- Load Font Awesome -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

    <!-- Load Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <title>Sidebar Navigation</title>
</head>
<body class="bg-gray-100 min-h-screen">

<div x-data="{ showSidenav: false, showFood: false, showDrink: false, searchQuery: '' }" class="relative">

    <!-- Sidebar Toggle Button -->
    <button @click="showSidenav = true" 
        x-show="!showSidenav" 
        class="fixed top-8 left-4 bg-slate-800 text-white rounded-full p-4 z-20">
        <i class="fas fa-bars fa-lg"></i>
    </button>

    <!-- Sidebar Navigation -->
    <nav x-show="showSidenav" 
        @click.away="showSidenav = false" 
        x-transition:enter="transition transform duration-300" 
        x-transition:enter-start="-translate-x-full" 
        x-transition:enter-end="translate-x-0" 
        x-transition:leave="transition transform duration-300" 
        x-transition:leave-start="translate-x-0" 
        x-transition:leave-end="-translate-x-full"
        class="fixed top-0 left-0 z-30 h-full bg-slate-800 w-72 text-white p-8 transition-all">

        <!-- Close Button -->
        <button @click="showSidenav = false" class="mb-6">
            <i class="fas fa-times fa-lg"></i>
        </button>

        <!-- Search Input -->
        <div class="relative mb-6" >
            <h2 class="font-bold text-small" >Menu Manajemen Kafe</h2>
        </div>
        <div class="relative mt-6 mb-6">
            <input type="text" x-model="searchQuery" placeholder="Search..." 
                class="w-full p-2 rounded bg-slate-700 text-white focus:outline-none" />
            <i class="fas fa-search absolute top-2.5 right-3 text-gray-400"></i>
        </div>

        <!-- Menu Items -->
        <ul class="space-y-4">
            <!-- Food Section -->
            <li>
                <button @click="showFood = !showFood" 
                    class="w-full flex items-center justify-between px-3 py-2 rounded hover:bg-slate-700">
                    <span>Food</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <ul x-show="showFood" x-collapse class="pl-6 space-y-2">
                    <li><a href="#" class="block hover:text-yellow-400">Pizza</a></li>
                    <li><a href="#" class="block hover:text-yellow-400">Burger</a></li>
                    <li><a href="#" class="block hover:text-yellow-400">Sushi</a></li>
                </ul>
            </li>

            <!-- Drink Section -->
            <li>
                <button @click="showDrink = !showDrink" 
                    class="w-full flex items-center justify-between px-3 py-2 rounded hover:bg-slate-700">
                    <span>Drinks</span>
                    <i class="fas fa-chevron-down"></i>
                </button>
                <ul x-show="showDrink" x-collapse class="pl-6 space-y-2">
                    <li><a href="#" class="block hover:text-yellow-400">Coffee</a></li>
                    <li><a href="#" class="block hover:text-yellow-400">Tea</a></li>
                    <li><a href="#" class="block hover:text-yellow-400">Juice</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>

<!-- Optional CSS -->
<style>
    @media (max-width: 768px) {
        nav {
            width: 100%;
        }
    }
</style>

</body>
</html>
