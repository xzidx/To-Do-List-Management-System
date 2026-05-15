@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#F9F5ED]">
    
    <div class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-8 py-6">
            
            <div class="flex items-center gap-3">
                
                <a href="{{ route('tasks.index') }}" class="text-gray-600 hover:text-gray-800 ">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h1 class="text-2xl font-bold text-black">Add Task</h1>
            </div>

        </div>
    </div>

    <div class="max-w-7xl mx-auto p-8">
        <div class="max-w-2xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-8">
                
                <form action="{{ route('tasks.store') }}" method="POST" class="space-y-6">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                        <div>
                            <label for="task_name" class="block text-base font-medium text-gray-700 mb-2">
                                Task Name 
                            </label>
                            
                            <input type="text" id="task_name" name="task_name" class="w-full px-4 py-2 border border-gray-300 rounded-lg "
                                placeholder="Enter task name">
                        </div>
                        
                        <div>
                            
                            <label for="participant_name" class="block text-base font-medium text-gray-700 mb-2">
                                Assignee 
                            </label>
                            
                            <input type="text" id="participant_name" name="participant_name"  class="w-full px-4 py-2 border border-gray-300 rounded-lg "
                                placeholder="Enter assignee name">
                        </div>
                        
                        <div>
                            <label for="task_date" class="block text-base font-medium text-gray-700 mb-2">
                                Date 
                            </label>
                            
                            <input type="date" id="task_date" name="task_date"  class="w-full px-4 py-2 border border-gray-300 rounded-lg  ">
                        </div>
                        
                        <div>
                            <label for="duration" class="block text-base font-medium text-gray-700 mb-2">
                                Duration
                            </label>
                            
                            <input type="text" id="duration" name="duration" class="w-full px-4 py-2 border border-gray-300 rounded-lg "
                                placeholder="30Minutes">
                        </div>
                    </div>
                    
                    <div>
                        <label for="status" class="block text-base font-medium text-gray-700 mb-2">
                            Status 
                        </label>

                        <select id="status" name="status" class="w-full px-4 py-2 border border-gray-200 rounded-lg ">
                            <option value="">Select Status</option>
                            <option value="pending">Pending</option>
                            <option value="in-progress">In Progress</option>
                            <option value="completed">Completed</option>
                        </select>

                    </div>
                    
                    <div>
                        <label for="description" class="block text-base font-medium text-gray-700 mb-2">
                            Description
                        </label>
                        
                        <textarea id="description" name="description" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg    "
                            placeholder="Enter task description..."></textarea>
                    </div>
                    
                    <div class="flex justify-end gap-3 pt-4">
                        
                        <a href="{{ route('tasks.index') }}" class="px-6 py-2 bg-gray-100 text-gray-700  font-medium">
                            Cancel
                        </a>
                        
                        <button type="submit" 
                                class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700 font-medium">
                            Create Task
                        </button>

                    </div>
                </form>

            </div>
        </div>
    </div>

</div>
@endsection