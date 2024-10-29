<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Register</title>
</head>
<body>
    <div class="h-screen flex">
        <div class="hidden lg:flex w-full lg:w-1/2 register_img_section justify-around items-center">
            <div class="bg-black opacity-20 inset-0 z-0"></div>
            <div class="w-full mx-auto px-20 flex-col items-center space-y-6">
                <h1 class="text-white font-bold text-4xl font-sans">Register Cafe</h1>
            </div>
        </div>
        <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-8">
            <div class="w-full px-8 md:px-32 lg:px-24">
                <form class="bg-white rounded-md shadow-2xl p-5">
                    <h1 class="text-gray-800 font-bold text-2xl mb-1">Create an Account</h1>
                    <p class="text-sm font-normal text-gray-600 mb-8">Fill the blank form</p>
                    
                    <!-- Input for Name -->
                    <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                        <input class="pl-2 w-full outline-none border-none" type="text" name="name" placeholder="Full Name" required />
                    </div>
                    
                    <!-- Input for Email -->
                    <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                        <input id="email" class="pl-2 w-full outline-none border-none" type="email" name="email" placeholder="Email Address" required />
                    </div>
                    
                    <!-- Input for Password -->
                    <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                        <input class="pl-2 w-full outline-none border-none" type="password" name="password" id="password" placeholder="Password" required />
                    </div>
                    
                    <!-- Input for Repeat Password -->
                    <div class="flex items-center border-2 mb-12 py-2 px-3 rounded-2xl">
                        <input class="pl-2 w-full outline-none border-none" type="password" name="password_confirmation" id="password_confirmation" placeholder="Repeat Password" required />
                    </div>
                    
                    <!-- Submit Button -->
                    <button type="submit" class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl hover:bg-indigo-700 hover:-translate-y-1 transition-all duration-500 text-white font-semibold mb-2">Register</button>
                    
                    <!-- Links -->
                    <div class="flex justify-between mt-4">
                        <a href="{{ route('login') }}" class="text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">Already have an account?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
