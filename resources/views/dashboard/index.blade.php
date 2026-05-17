
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
                        <h3 class="text-2xl p-[10px] font-medium"><i class="fa-solid fa-clipboard-check mr-[30px] text-4xl text-[#940B0B]"></i>{{ $totalTasks }}</h3>
                </div>
                <!-- -------------- -->
                <div class="w-[330px] h-[120px]  flex flex-col items-center justify-center bg-[#FFF59D] shadow-lg">
                    
                        <h2 class="text-2xl font-semibold">Pending</h2>
                        <h3 class="text-2xl p-[10px] font-medium"><i class="fa-solid fa-hourglass mr-[30px] text-4xl text-[#D7A10A]"></i>{{ $pendingTasks }}</h3>
                </div>
                <!-- -------------- -->
                <div class="w-[330px] h-[120px] flex flex-col items-center justify-center bg-[#E3FFD9] shadow-lg">
                    
                        <h2 class="text-2xl font-semibold">Completed</h2>
                        <h3 class="text-2xl p-[10px] font-medium"><i class="fa-solid fa-calendar-check mr-[30px] text-4xl text-[#4CAF50]"></i>{{ $completedTasks }}</h3>
                </div>
                <!-- -------------- -->
                <div class="w-[330px] h-[120px] flex flex-col items-center justify-center bg-[#9BA4D4] shadow-lg">
                    
                        <h2 class="text-2xl font-semibold">In Progress</h2>
                        <h3 class="text-2xl p-[10px] font-medium"><i class="fa-regular fa-clock mr-[30px] text-4xl text-[#123ABD]"></i>{{ $inProgressTasks }}</h3>
                </div>
            
        </div>





            <!-- search bar -->
        <div class="w-full h-[80px] mt-[50px] flex items-center justify-center gap-4">

            <!-- Search Form -->
            <form 
                action="{{ route('tasks.index') }}" 
                method="GET"
                class="w-[100%] h-[45px] border-2 border-[#888888] rounded-md flex items-center px-4 bg-white"
            >

                <!-- Search Icon -->
                <i class="fa-solid fa-magnifying-glass text-gray-500 text-[18px]"></i>

                <!-- Input -->
                <input 
                    type="text"
                    name="search"
                    value="{{ request('search') }}"
                    placeholder="Search tasks"
                    class="w-full h-full px-3 outline-none text-[17px]"
                >

                <button type="submit" class="hidden"></button>

            </form>

            <!-- Filter Button -->
           <form action="{{ route('tasks.index') }}" method="GET" class="relative">

                <div class="relative">

                    <!-- Filter Icon -->
                    <i class="fa-solid fa-filter absolute left-3 top-[14px] text-gray-500 text-[16px]"></i>

                    <!-- Select -->
                    <select 
                        name="status"
                        onchange="this.form.submit()"
                        class="appearance-none w-[170px] h-[45px] pl-10 pr-10 border border-gray-300 rounded-lg bg-white text-[16px] font-medium text-gray-700 shadow-sm cursor-pointer outline-none focus:ring-2 focus:ring-blue-500"
                    >

                        <option value="">Filter Status</option>

                        <option value="pending"
                            {{ request('status') == 'pending' ? 'selected' : '' }}>
                            Pending
                        </option>

                        <option value="in-progress"
                            {{ request('status') == 'in-progress' ? 'selected' : '' }}>
                            In Progress
                        </option>

                        <option value="completed"
                            {{ request('status') == 'completed' ? 'selected' : '' }}>
                            Completed
                        </option>

                    </select>

                    <!-- drop down-->
                    <i class="fa-solid fa-chevron-down absolute right-3 top-[14px] text-gray-500 text-[14px] pointer-events-none"></i>

                </div>

            </form>
        </div>




        

    <!-- task table -->

                  <div class="rounded-lg bg-[#9BB2C4] shadow overflow-hidden" >
                    <table class="w-full">
                        <thead class="border-b bg-[#9BB2C4]">
                            <tr>
                                <th class="px-6 py-3 text-left text-base font-medium text-black ">Task Id</th>
                                <th class="px-6 py-3 text-left text-base font-medium text-black ">Title</th>
                                <th class="px-6 py-3 text-left text-base font-medium text-black ">Assignees</th>
                                <th class="px-6 py-3 text-left text-base font-medium text-black ">Status</th>
                                <th class="px-6 py-3 text-left text-base font-medium text-black ">Time spent</th>
                                <th class="px-6 py-3 text-left text-base font-medium text-black ">Date</th>
                                <th class="px-6 py-3 text-left text-base font-medium text-black ">Action</th>
                            </tr>
                        </thead>

                        <tbody class=" bg-white">
                                @foreach($tasks as $task)
                                    <tr class="hover:bg-gray-50">
                                        <td class="px-6 py-4 whitespace-nowrap text-base font-normal text-black">{{ str_pad($task->id, '1') }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-base text-black">{{ $task->title }}</td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            
                                            <div class="flex items-center">
                                                <img class="h-9 w-9 rounded-full" src="{{ asset('images/pf1.png') }}" alt="">
                                                <span class="ml-2 text-base text-black">{{ $task->assignees }}</span>
                                            </div>

                                        </td>
                                        
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            
                                            @if($task->status == 'pending')
                                                <span class="px-2 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                    Pending
                                                </span>
                                            @elseif($task->status == 'completed')
                                                <span class="px-2 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                    Completed
                                                </span>
                                            @else
                                                <span class="px-2 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                    In Progress
                                                </span>
                                            @endif
                                        </td>

                                        <td class="px-6 py-4  text-base text-black">{{ $task->duration ?? '30Minutes' }}</td>
                                        <td class="px-6 py-4 text-base text-black">{{ $task->date->format('d/m/Y') }}</td>
                                        <td class="px-6 py-4  text-base font-medium">
                                            
                                            <form action="{{ route('tasks.destroy', $task->id) }}" method="POST" class="inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="text-red-600  mr-3" title="Delete" onclick="return confirm('Are you sure')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>

                                            <a href="{{ route('tasks.show', $task->id) }}" class="text-green-600 hover:text-green-900 mr-3" title="View">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            
                                            <a href="{{ route('tasks.edit', $task->id) }}" class="text-blue-600 hover:text-blue-900" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                
                        </tbody>
                    </table>
                </div>
    @endsection
</body>
</html>