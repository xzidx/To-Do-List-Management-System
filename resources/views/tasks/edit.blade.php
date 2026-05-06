<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Edit Task</title>
</head>
<body style="background-color: #F9F5ED;">
    <!-- The Container -->
    <div class="max-w-7xl mx-auto">

      <!-- The Banner -->
      <div class="mt-[100px]">
            <!-- Header -->
            <div class="bg-white shadow-sm border-b px-8 py-6">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-bold text-black">Edit Task</h1>
                    <div class="text-sm text-black">
                        Focus | Prioritize | Execute
                    </div>
                </div>
            </div>

            <!-- Content -->
            <div class="p-8">
                <div class="max-w-2xl mx-auto rounded-lg shadow-lg p-8" style="background-color: #9BB2C4;">
                    <form action="index.blade.php" method="POST" class="space-y-6">
                            <input type="hidden" name="taskId" id="taskId">
                        
                        <div>
                            <label class="block text-sm font-medium text-black mb-2">Task Name</label>
                            <input type="text" name="taskName" id="taskName" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"
                                   placeholder="Enter task name">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-black mb-2">Participant Name</label>
                            <select name="participantName" id="participantName" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Select Participant</option>
                                <option value="Nimol Lim">Nimol Lim</option>
                                <option value="John Doe">John Doe</option>
                                <option value="Jane Smith">Jane Smith</option>
                                <option value="Mike Johnson">Mike Johnson</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-black mb-2">Date</label>
                            <input type="date" name="taskDate" id="taskDate" required 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-black mb-2">Team member</label>
                            <select name="teamMember" id="teamMember" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="">Select Team Member</option>
                                <option value="Apeovv">Apeovv</option>
                                <option value="Apavev">Apavev</option>
                                <option value="Team Lead">Team Lead</option>
                                <option value="Project Manager">Project Manager</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-black mb-2">Duration</label>
                            <input type="text" name="duration" id="duration" placeholder="e.g., 30Minutes" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-black mb-2">Status</label>
                            <select name="taskStatus" id="taskStatus" required 
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
                                <option value="pending">Pending</option>
                                <option value="in-progress">In Progress</option>
                                <option value="completed">Completed</option>
                            </select>
                        </div>
                        
                        <div>
                            <label class="block text-sm font-medium text-black mb-2">Description</label>
                            <textarea name="taskDescription" id="taskDescription" rows="6" placeholder="Enter task description..." 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                        </div>
                        
                         <!--  Description   -->
                        <div class="rounded-lg p-3" style="background-color: white;">
                            <div class="text-sm text-black">Increase community participation.</div>
                        </div>
                        
                        <div class="flex justify-end space-x-4 pt-6 border-t">
                            <a href="index.blade.php" 
                               class="px-6 py-3 text-black rounded-lg hover:opacity-90 transition-colors" style="background-color: #9BB2C4;">
                                <i class="fas fa-arrow-left mr-2"></i>
                                Cancel
                            </a>
                            <button type="submit" 
                                    class="px-6 py-3 text-white rounded-lg hover:opacity-90 transition-colors" style="background-color: #9BB2C4;">
                                <i class="fas fa-save mr-2"></i>
                                Save Changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

</body>
</html>