<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <title>Login</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
          integrity="sha384-Mo3KDAchFfZn+/z5z3Mcnf+JhK2iOlTI6E+3kz1wo7/4a7yLrTi6U1z9Aj2yeC3P" 
          crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
    <body>
        <main>
            <div class="h-screen flex">
                <!-- Left Section -->
                <div class="hidden lg:flex w-full lg:w-1/2 login_img_section justify-around items-center">
                    <div class="bg-black opacity-20 inset-0 z-0"></div>
                    <div class="w-full mx-auto px-20 flex-col items-center space-y-6">
                        <h1 class="text-white font-bold text-4xl font-sans">Login Cafe</h1>
                    </div>
                </div>
    
                <!-- Right Section -->
                <div class="flex w-full lg:w-1/2 justify-center items-center bg-white space-y-8">
                    <div class="w-full px-8 md:px-32 lg:px-24">
                        <form class="bg-white rounded-md shadow-2xl p-5">
                            <h1 class="text-gray-800 font-bold text-2xl mb-1">Hello!!</h1>
                            <p class="text-sm font-normal text-gray-600 mb-8">Welcome Back!</p>
    
                            <!-- Email Input with Font Awesome Icon -->
                            <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                                <input id="email" class="pl-2 w-full outline-none border-none" 
                                    type="email" name="email" placeholder="Email" />
                            </div>
    
                            <!-- Password Input with Font Awesome Icon -->
                            <div class="flex items-center border-2 mb-12 py-2 px-3 rounded-2xl">
                                
                                <input id="password" class="pl-2 w-full outline-none border-none" 
                                    type="password" name="password" placeholder="Password" />
                            </div>
    
                            <!-- Login Button -->
                            <button type="submit" 
                                class="block w-full bg-indigo-600 mt-5 py-2 rounded-2xl 
                                    hover:bg-indigo-700 hover:-translate-y-1 transition-all 
                                    duration-500 text-white font-semibold mb-2">
                                Login
                            </button>
    
                            <!-- Additional Links -->
                            <div class="flex justify-between mt-4">
                                <a href="{{ route('forgot password') }}">
                                    <span class="text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">
                                        Forgot Password?
                                    </span>
                                </a>
                                <a href="{{ route('register') }}" class="text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all">
                                    Don't have an account yet?
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </body>
</html>
