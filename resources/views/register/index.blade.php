<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign Up</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <style>

        </style>
</head>
<body class="overflow-hidden">

        <div class="h-screen flex items-center justify-center bg-[#F9F5ED] py-20 px-4 sm:px-6 lg:px-8">
                <div class="max-w-fit w-full space-y-2 bg-white p-10 shadow-2xl rounded-2xl border border-gray-100">

                        <div class="text-center">
                                <h2 class="mt-6 text-3xl font-inter text-gray-900">Sign Up</h2>
                                <p class="mt-2 text-sm text-gray-500">Let's get you all set up so you can access your personal account.</p>
                        </div>

                        <form method="POST" action="/register" class="mt-8 space-y-6">
                                @csrf
                                <div class="rounded-sm space-y-2">

                                        <div>
                                                <label for="username" class="block text-sm font-roboto text-gray-700 mb-1">User name</label>
                                                <input type="text" name="name" id="name" required 
                                                class="appearance-none relative block w-full py-3 px-4 border border-[#9BB2C4] placeholder-[#9BB2C4] text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9BB2C4] focus:border-transparent transition-all duration-200"
                                                placeholder="name">
                                        </div>         

                                        <div>
                                                <label for="email" class="block text-sm font-roboto text-gray-700 mb-1">Email Address</label>
                                                <input type="email" name="email" id="email" required 
                                                class="appearance-none relative block w-full py-3 px-4 border border-[#9BB2C4] placeholder-[#9BB2C4] text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9BB2C4] focus:border-transparent transition-all duration-200"
                                                placeholder="your@email.com">
                                        </div>

                                        <div>
                                                <label for="password" class="block text-sm font-roboto text-gray-700 mb-1">Password</label>
                                                <input type="password" name="password" id="password" required
                                                class="appearance-none relative block w-full py-3 px-4 border border-[#9BB2C4] placeholder-[#9BB2C4] text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9BB2C4] focus:border-transparent transition-all duration-200"
                                                placeholder="••••••••">
                                        </div>
                                        <div class="flex items-center justify-between">
                                                <div class="flex items-center">
                                                        <input type="checkbox" id="remember-me" name="remember"
                                                        class="h-4 w-4 text-[#3700B3] focus:ring-[#3700B3] border-gray-300 rounded cursor-pointer">
                                                        <label for="remember-me" class="ml-2 block text-sm text-gray-600 my-4 cursor-pointer">Remember Me</label>
                                                </div>

                                                <div class="text-sm">
                                                        <a href="#" class="font-medium text-[#3700B3] hover:text-[#9BB2C4] transition-colors my-4">Forgot password?</a>
                                                </div>
                                        </div>

                                        <div>
                                                <button type="submit"
                                                class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-bold rounded-lg text-white bg-[#9BB2C4] hover:bg-[#8BAAB8] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#9BB2C4] transform transition-all active:scale-95 shadow-lg">
                                                Sign Up
                                                </button>
                                        </div>

                                        <div class="flex items-center justify-center gap-2 text-center pt-4">
                                                <p class="text-sm text-gray-600">Already have an Account?</p>
                                                <a href="/login" class="text-sm font-medium hover:text-[#9BB2C4] text-[#3700B3] transition-colors">Login</a>
                                        </div>

                                </div>
                        </form>
                </div>
        </div>
        
</body>
</html>