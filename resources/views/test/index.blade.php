<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 font-sans">

    <div class="min-h-screen flex items-center justify-center p-4">
        <div class="bg-white rounded-2xl shadow-xl max-w-md w-full p-8">
            
            <!-- Header -->
            <div class="text-center mb-8">
                <div class="text-5xl mb-3"></div>
                <h1 class="text-3xl font-bold text-gray-800">Test Form</h1>
                <p class="text-gray-500 mt-2">Fill in the details below</p>
            </div>

        
         

            <form method="POST" action="{{ url('/test') }}" class="space-y-5">
                @csrf

                <!-- Name Field -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">
                         Your Name
                    </label>
                    <input type="text" 
                           name="name" 
                           placeholder="John Doe"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                </div>

                <!-- Phone Number field -->
                <div>
                    <label class="block text-gray-700 font-semibold mb-2">
                        Phone Number
                    </label>
                    <input type="text" 
                           name="phone_number" 
                           placeholder="you@example.com"
                           class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent transition">
                </div>

    
                <button type="submit" 
                        class="w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200 transform hover:scale-[1.02]">
                     Submit Test
                </button>
            </form>

           
            <div class="text-center mt-6 text-sm text-gray-400">
      
            </div>
        </div>
    </div>

</body>
</html>