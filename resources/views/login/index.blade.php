<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>login</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>

        <div class="min-h-screen w-full flex items-center justify-center bg-[#F9F5ED] py-2 px-4 sm:px-6 lg:px-8">
                <div class="max-w-sm w-full space-y-8 bg-white p-10 shadow-2xl rounded-2xl border border-gray-100">

                        <div class="text-center">
                                <h2 class="mt-6 text-3xl font-inter text-gray-900 ">Account Login</h2>
                                <p class="mt-2 text-sm text-gray-500">Plase Enter Your infomation</p>
                        </div>

                        <!-- formlogin -->
                         <form method="POST" action="{{ url('/login/authenticate') }}" class="mt-8 space-y-6">
                                @csrf
                        <div class="rounded-sm space-y-2">
                                <div>
                                        <label for="email" class="block text-sm font-roboto text-gray-700 mb-1">Email Address</label>
                                        <input type="email" name="email" id="email" required 
                                        class="appearance-none relative block w-full py-3 px-4 border border-[#9BB2C4] placeholder-[#9BB2C4] text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-[#9BB2C4] focus:border-transparent transition-all duration-200"
                                        placeholder="your@email.com">
                                </div>


                                <div>

                                <label for="password" class="bock test-sm font-roboto text-gray-700 mb-1">Password</label>
                                <input type="password" name="password" id="password" required
                                class="appearance-none relative block w-full py-3 px-4 border border-[#9BB2C4] placeholder-[#9BB2C4] text-gray-900 rounded-lg focus:outline-none focus:ring-2 focus:ring-[9BB2C4] focus:border-transpanrent transition-all duration-200"
                                placeholder="••••••••"
                                >

                                </div>


                                <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                                <input type="checkbox" id="remember-me" name="remember"
                                                 class="h-4 w-4 text-[#3700B3] focus:ring-[] border-gray-300 rounded cursor-pointer">
                                                 <label for="remember-me" class="ml-2 block text-sm text-gray-600 my-4 corsor-pointer">Remember Me</label>
                                        </div>

                                        <div class="text-sm">
                                                <a href="#" class="btn-link font-medium text-[#3700B3] hover:text-[#9BB2C4] transition-colors my-4">Forgot password</a>
                                        </div>
                                </div>


                                <div>
                                        <button type="submit"
                                        class=" group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-bold rounded-lg text-white bg-[#9BB2C4] focus-outline-none focus:ring-2 focus:ring-offset-2 focus-ring[#9BB2C4] tranform transition-all active:scale-95 shadow-lg">
                                        Login
                                        </button>
                                </div>

                                <div class="flex items-center text-center">
                                        <p class="text-sm text-gray-600 corsor-pointer">Don't have an Account?</p>
                                        <a href="/register" class=" text-sm font-medium hover:text-[#9BB2C4] text-[#3700B3] transition-colors my-4">Register now</a>
        
                                </div>

                        </div>
                        
                        </form>
                </div>
        </div>
        
</body>
</html>