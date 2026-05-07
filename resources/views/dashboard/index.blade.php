
@extends('layouts.app') 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>dashboard</title>
</head>
<body>
    @section('content')
        <!-- page name -->
     <h1 class="text-4xl font-bold text-gray-800">Tasks Dashboard</h1>

     <!-- box cover dashboard -->
     <div class="w-full h-[120px]  flex flex-row gap-[80px] items-center justify-center mt-[60px] ">

            <!-- menu dashboard -->
            <div class="w-[330px] h-[120px] flex flex-col items-center justify-center bg-[#FFD4D4] shadow-lg">
                   
                    <h2 class="text-2xl font-semibold">Total Tasks</h2>
                    <h3 class="text-2xl p-[10px] font-medium"><i class="fa-solid fa-clipboard-check mr-[30px] text-4xl text-[#940B0B]"></i>8</h3>
            </div>
            <!-- -------------- -->
            <div class="w-[330px] h-[120px]  flex flex-col items-center justify-center bg-[#FFF59D] shadow-lg">
                   
                    <h2 class="text-2xl font-semibold">Pending</h2>
                    <h3 class="text-2xl p-[10px] font-medium"><i class="fa-solid fa-hourglass mr-[30px] text-4xl text-[#D7A10A]"></i>8</h3>
            </div>
            <!-- -------------- -->
             <div class="w-[330px] h-[120px] flex flex-col items-center justify-center bg-[#E3FFD9] shadow-lg">
                   
                    <h2 class="text-2xl font-semibold">Completed</h2>
                    <h3 class="text-2xl p-[10px] font-medium"><i class="fa-solid fa-calendar-check mr-[30px] text-4xl text-[#4CAF50]"></i>8</h3>
            </div>
             <!-- -------------- -->
            <div class="w-[330px] h-[120px] flex flex-col items-center justify-center bg-[#9BA4D4] shadow-lg">
                   
                    <h2 class="text-2xl font-semibold">In Progress</h2>
                    <h3 class="text-2xl p-[10px] font-medium"><i class="fa-regular fa-clock mr-[30px] text-4xl text-[#123ABD]"></i>8</h3>
            </div>
           
     </div>

        <!-- search bar -->
    <div class="w-full h-[80px] mt-[50px] flex items-center justify-center gap-4">

            <!-- Search Form -->
            <form class="w-[85%] h-[60px] border-2 border-[#888888] rounded-md flex items-center px-4 bg-white">

                <!-- Search Icon -->
                <i class="fa-solid fa-magnifying-glass text-gray-500 text-[20px]"></i>

                <!-- Input -->
                <input 
                    type="text"
                    placeholder="Search tasks"
                    class="w-full h-full px-3 outline-none text-[18px]"
                >

            </form>

            <!-- Filter Form -->
            <form class="w-[10%] h-[60px] border-2 border-[#888888] rounded-md flex items-center justify-center bg-white cursor-pointer hover:bg-gray-100">

                <button type="submit" class="flex items-center text-xl gap-2">
                    <i class="fa-solid fa-filter text-[20px] text-gray-600"></i>
                    <h2>Fillter</h2>
                </button>

            </form>

    </div>

    <!-- task table -->


<div class="rounded-lg bg-[#9BB2C4] shadow overflow-hidden mt-[20px]" >
                    <table class="w-full">
                        <thead class="border-b bg-[#9BB2C4]">
                            <tr>
                                <th class="px-6 py-3 text-left text-lg font-medium text-black ">Task Id</th>
                                <th class="px-6 py-3 text-left text-base font-medium text-black ">Title</th>
                                <th class="px-6 py-3 text-left text-base font-medium text-black ">Assignees</th>
                                <th class="px-6 py-3 text-left text-base font-medium text-black ">Status</th>
                                <th class="px-6 py-3 text-left text-base font-medium text-black ">Time spent</th>
                                <th class="px-6 py-3 text-left text-base font-medium text-black ">Date</th>
                                <th class="px-6 py-3 text-left text-base font-medium text-black ">Action</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200" style="background-color: white;">

                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-base font-normal text-black">#001</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-black">Property page</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <img class="h-9 w-9 rounded-full" src="{{ asset('images/pf1.png') }}" alt="">
                                        <span class="ml-2 text-base text-black">Nimol Lim</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        Pending
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-black">30Minutes</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-black">02/05/2026</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base font-medium">
                                    <a href="delete.blade.php" class="text-red-600 hover:text-red-900 mr-3" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="show.blade.php" class="text-green-600 hover:text-green-900 mr-3" title="View">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="edit.blade.php" class="text-blue-600 hover:text-blue-900" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                                <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-base font-normal text-black">#002</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-black">Website Development</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <img class="h-9 w-9 rounded-full" src="{{ asset('images/pf2.png') }}" alt="">
                                        <span class="ml-2 text-base text-black">Nimol Lim</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        Completed
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-black">2h 30m</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-black">05/06/2026</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base font-medium">
                                    <a href="delete.blade.php" class="text-red-600 hover:text-red-900 mr-3" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="show.blade.php" class="text-green-600 hover:text-green-900 mr-3" title="View">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="edit.blade.php" class="text-blue-600 hover:text-blue-900" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-base font-normal text-black">#003</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-black">Database Design</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <img class="h-9 w-9 rounded-full" src="{{ asset('images/pf3.png') }}" alt="">
                                        <span class="ml-2 text-base text-black">Nimol Lim</span>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <span class="px-2 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                        In Progress
                                    </span>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-black">1h 15m</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base text-black">05/07/2026</td>
                                <td class="px-6 py-4 whitespace-nowrap text-base font-medium">
                                    <a href="delete.blade.php" class="text-red-600 hover:text-red-900 mr-3" title="Delete">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="show.blade.php" class="text-green-600 hover:text-green-900 mr-3" title="View">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="edit.blade.php" class="text-blue-600 hover:text-blue-900" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>


























    @endsection
</body>
</html>