@extends('layouts.app')

@section('content')
<div class="min-h-screen bg-[#F9F5ED]">
    
    <div class="bg-white shadow-sm border-b">
        
        <div class="max-w-7xl mx-auto px-8 py-6">
            <div class="flex items-center gap-3">
                
                <a href="{{ route('tasks.index') }}" class="text-gray-600 hover:text-gray-800 transition-colors">
                    <i class="fas fa-arrow-left"></i>
                </a>
                <h1 class="text-2xl font-bold text-black">Edit Task</h1>
            </div>

        </div>

    </div>

    <div class="max-w-7xl mx-auto p-8">

        <div class="max-w-2xl mx-auto">
            <div class="bg-white rounded-lg shadow-lg p-8">
                
                <form action="{{ route('tasks.update', $task->id) }}" method="POST" class="space-y-6">
                    @csrf
                    @method('PATCH')
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        
                        <div>
                            <label for="task_name" class="block text-base font-medium text-gray-700 mb-2">
                                Task Name 
                            </label>
                            
                            <input type="text" id="task_name" name="task_name" required 
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg  "
                                placeholder="Enter task name"
                                value="{{ old('task_name', $task->title) }}">
                        </div>
                        
                        <div>
                            
                            <label for="participant_name" class="block text-base font-medium text-gray-700 mb-2">
                                Assignee 
                            </label>
                            
                            <input type="text" id="participant_name" name="participant_name" required class="w-full px-4 py-2 border border-gray-300 rounded-lg "placeholder="Enter assignee name"
                                value="{{ old('participant_name', $task->assignees) }}">
                        </div>
                        
                        <div>
                            <label for="task_date" class="block text-base font-medium text-gray-700 mb-2">
                                Date 
                            </label>
                            
                            <input type="date" id="task_date" name="task_date" required class="w-full px-4 py-2 border border-gray-300 rounded-lg " value="{{ old('task_date', $task->date->format('Y-m-d')) }}">
                        </div>
                        
                        <div>
                            <label for="duration" class="block text-base font-medium text-gray-700 mb-2">
                                Duration
                            </label>
                            
                            <input type="text" id="duration" name="duration" class="w-full px-4 py-2 border  " placeholder="30Minutes" value="{{ old('duration', $task->duration) }}">
                        </div>
                    </div>
                    
                    <div>
                        <label for="status" class="block text-base font-medium text-gray-700 mb-2">
                            Status 
                        </label>

                        <select id="status" name="status" required class="w-full px-4 py-2 border border-gray-100 rounded-lg  ">
                           
                            <option value="">Select Status</option>
                            
                            <option value="pending" {{ old('status', $task->status) === 'pending' ? 'selected' : '' }}>Pending</option>
                            <option value="in-progress" {{ old('status', $task->status) === 'in-progress' ? 'selected' : '' }}>In Progress</option>
                           
                            <option value="completed" {{ old('status', $task->status) === 'completed' ? 'selected' : '' }}>Completed</option>
                        </select>

                    </div>
                    
                    <div>
                        <label for="description" class="block text-base font-medium text-gray-700 mb-2">
                            Description
                        </label>
                        
                        <textarea id="description" name="description" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-lg " placeholder="Enter task description...">{{ old('description', $task->description) }}</textarea>
                    </div>
                    
                    <div class="flex justify-end gap-3 pt-4">
                        
                        <a href="{{ route('tasks.index') }}" class="px-6 py-2 bg-gray-100 text-gray-700  rounded-lg hover:bg-gray-200  font-medium">
                            Cancel
                        </a>
                        
                        <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700  font-medium">
                            Update Task
                        </button>

                    </div>
                </form>

            </div>
        </div>
    </div>

</div>
@endsection