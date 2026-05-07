@extends('layouts.app')

@section('content')
    <div class="max-w-7xl mx-auto bg-[#F9F5ED]">
        
        <div class="bg-white shadow-sm border-b px-8 py-6">
            <div class="flex justify-between items-center">
                <h1 class="text-2xl font-bold text-black">Edit Task</h1>
                
            </div>
        </div>

        <div class="p-8">
            <div class="max-w-2xl mx-auto bg-[#9BB2C4] rounded-lg shadow-lg p-8">
                <form action="index.blade.php" method="POST" class="space-y-6">
                    
                    <div>
                        <label class="block text-sm font-medium text-black mb-2">Task Name</label>
                        <input type="text" name="task_name" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"
                               placeholder="Enter task name">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-black mb-2">Participant Name</label>
                        <select name="participant_name" required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                            <option value="">Select Participant</option>
                            <option value="Nimol Lim">Nimol Lim</option>
                            <option value="John Doe">John Doe</option>
                            <option value="Jane Smith">Jane Smith</option>
                            <option value="Mike Johnson">Mike Johnson</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-black mb-2">Date</label>
                        <input type="date" name="task_date" required 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-black mb-2">Team Member</label>
                        <select name="team_member" required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                            <option value="">Select Team Member</option>
                            <option value="Apeovv">Apeovv</option>
                            <option value="Apavev">Apavev</option>
                            <option value="Team Lead">Team Lead</option>
                            <option value="Project Manager">Project Manager</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-black mb-2">Duration</label>
                        <input type="text" name="duration" placeholder="e.g., 30Minutes" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-black mb-2">Status</label>
                        <select name="status" required 
                                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white">
                            <option value="pending">Pending</option>
                            <option value="in-progress">In Progress</option>
                            <option value="completed">Completed</option>
                        </select>
                    </div>
                    
                    <div>
                        <label class="block text-sm font-medium text-black mb-2">Description</label>
                        <textarea name="description" rows="6" placeholder="Enter task description..." 
                                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 bg-white"></textarea>
                    </div>
                    
                    <div class="bg-white rounded-lg p-3">
                        <div class="text-sm text-black">Increase community participation.</div>
                    </div>
                    
                    <div class="flex justify-end ">
                        <a href="index.blade.php" 
                           class="px-6 py-3 bg-white text-black border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors">
                            Cancel
                        </a>
                        <button type="submit" 
                                class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                            Save Changes
                        </button>
                    </div>
                    
                </form>
            </div>
        </div>
        
    </div>
@endsection