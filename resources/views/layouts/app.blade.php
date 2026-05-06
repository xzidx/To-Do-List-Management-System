
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <title>side-bar</title>
</head>
<body>
     <!-- box-cover-sidebar -->
    <div class="w-full h-full  h-screen  bg-red-200 flex">

            <!-- side-bar -->
            <div class="w-[300px] h-screen bg-white">

                  <!-- logo project -->
                    <div class="w-full h-[120px] ">
                        <img src="/assets/logo.png" alt="Logo" class="w-full h-full">
                    </div>

                  <!-- sidebar-menu -->
                    <div class="flex flex-col gap-[10px]  text-[#5F5F5F]">
                        <h1 class="mt-[80px] ml-[20px] text-2xl">Main</h1>


                        <div class="h-[60px] flex items-center hover:bg-[#9BB2C4] transition">
                            <a href="/about" class="text-lg ml-[60px] flex items-center gap-3 hover:text-black transition">
                            <i class="fa-solid fa-sliders"></i>
                                Dashboard
                            </a>
                        </div>
                        
                        <div class="h-[60px] flex items-center hover:bg-[#9BB2C4] transition">
                            <a href="/about" class="text-lg ml-[60px] flex items-center gap-3 hover:text-black transition">
                            <i class="fa-solid fa-list-check"></i>
                                Task
                            </a>
                        </div>

                        <div class="h-[60px] flex items-center hover:bg-[#9BB2C4] transition">
                            <a href="/about" class="text-lg ml-[60px] flex items-center gap-3 hover:text-black transition">
                            <i class="fa-solid fa-bell"></i>
                                Notification
                            </a>
                        </div>
                    </div>


                    <!-- here -->
                    <div class="flex flex-col gap-4 p-4 max-w-sm mt-[340px]">
  
                            <!-- Profile Card -->
                            <div class="flex items-center gap-3 p-3 border border-gray-300 rounded-2xl">
                                <!-- profile -->
                                <div class="w-12 h-12 bg-[#9BB2C4] rounded-full flex-shrink-0"></div>
                                
                                <!-- Text -->
                                <div class="flex flex-col min-w-0">
                                <span class="text-lg font-semibold text-[#9BB2C4] truncate">Lucky.dev</span>
                                <span class="text-sm text-gray-500 truncate">c.samnang.dev@gmail.com</span>
                                </div>
                            </div>

                            <!-- Logout -->
                            <button class="flex items-center gap-3 px-2 group transition-opacity hover:opacity-80">
                               <i class="fa-solid fa-arrow-right-from-bracket text-red-500"></i>
                               
                                <span class="text-lg font-medium text-red-500">Logout</span>
                            </button>

                    </div>
                    
            </div>
    </div>

</body>
</html>


