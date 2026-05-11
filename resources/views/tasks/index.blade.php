<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Task List</title>
</head>
<body">
@extends('layouts.app')

@section('content')

        <div class="  bg-[#F9F5ED] ">
           
            <div class="bg-white shadow-sm border-b px-8 py-6">
               
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-bold text-black">Task Lists</h1>
                   
                </div>
            </div>

            <div class="p-8">
                <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-6">
                    <div class="flex gap-2">
                        <button class="px-4 py-2 text-white bg-[#9BB2C4] font-medium rounded-lg hover:opacity-90 transition-colors">
                            All
                        </button>
                        <button class="px-4 py-2 text-black rounded-lg font-medium bg-[#fff] hover:opacity-90 transition-colors">
                            Pending
                        </button>
                        <button class="px-4 py-2 text-black font-medium bg-[#fff] rounded-lg hover:opacity-90 transition-colors">
                            Completed
                        </button>
                    </div>
                    
                    <div class="flex gap-3 items-center">
                        <div class="relative">
                            <input type="text" placeholder="Search task..." class="pl-10 pr-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 w-64">
                            <i class="fas fa-search absolute left-3 top-3 text-gray-400"></i>
                        </div>
                        
                        <button class="px-4 py-2 font-medium text-black rounded-lg bg-[#fff] border border-gray-300 hover:opacity-90 transition-colors flex items-center">
                            <i class="fas fa-filter mr-2"></i>
                            Filter
                        </button>
                    
                        <button class="px-4 py-2 text-black font-medium rounded-lg hover:opacity-90 transition-colors flex items-center bg-[#9BB2C4]" >
                            <i class="fas fa-plus mr-2"></i>
                            <a href="{{ route('tasks.create') }}" class=" hover:text-white">Add Task</a>
                        </button>
                    </div>
                </div>
      
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
                                        <td class="px-6 py-4 text-base text-black">{{ \Carbon\Carbon::parse($task->date)->format('d/m/Y') }}</td>
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
        </div>
@endsection

    </body>
</html>