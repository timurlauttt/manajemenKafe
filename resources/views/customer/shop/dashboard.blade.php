<!-- views/customer/shop/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Dashboard</title>
</head>
<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        @include('customer.layouts.navbar')

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <h1 class="text-4xl font-bold text-center mb-4">Hello World</h1>
            <p class="text-center">Welcome to the dashboard!</p>
        </div>
    </div>
</body>
</html>
