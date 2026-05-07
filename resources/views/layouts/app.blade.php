<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <title>Modern Sidebar</title>
</head>
<body class="bg-gray-100">

<div class="flex h-screen">

    <!-- Sidebar -->
    <aside class="w-[260px] bg-white shadow-lg flex flex-col justify-between">

        <!-- Top -->
        <div>
            <!-- Logo -->
            <div class="h-[90px] flex items-center justify-center border-b">
                <img src="/assets/logo.png" alt="Logo" class="w-[300px] h-[90px] object-contain">
            </div>

            <!-- Menu -->
            <nav class="mt-6 px-4 space-y-2 text-gray-600">
                <h2 class="text-xs uppercase tracking-wider text-gray-400 px-2 mb-2">Main</h2>

                <!-- Item -->
                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-100 transition">
                    <i class="fa-solid fa-sliders"></i>
                    Dashboard
                </a>

                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-100 transition">
                    <i class="fa-solid fa-list-check"></i>
                    Task
                </a>

                <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-gray-100 transition">
                    <i class="fa-solid fa-bell"></i>
                    Notification
                </a>
            </nav>
        </div>

        <!-- Bottom Profile -->
        <div class="p-4 border-t">
            
            <!-- Profile -->
            <div class="flex items-center gap-3 p-3 bg-gray-50 rounded-xl">
                <div class="w-10 h-10 bg-blue-400 rounded-full"></div>

                <div class="flex flex-col min-w-0">
                    <span class="text-sm font-semibold text-gray-800 truncate">Lucky.dev</span>
                    <span class="text-xs text-gray-500 truncate">c.samnang.dev@gmail.com</span>
                </div>
            </div>

            <!-- Logout -->
            <button class="w-full mt-4 flex items-center justify-center gap-2 py-2 text-red-500 hover:bg-red-50 rounded-lg transition">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                Logout
            </button>

        </div>

    </aside>

    <!-- Content Area -->
    <main class="flex-1 p-6">
         @yield('content')
    </main>

</div>

</body>
</html>