<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.tailwindcss.com"></script>

    <title>Task</title>
</head>
<body>
    <div class="p-6 bg-[#F9F5ED] max-w-7xl mx-auto  mt-[100px]">
       
        <h1 class=" text-3xl font-bold text-black">
            Task List
        </h1>
        <span class="text-lg">short description will be placed here</span>

        <br> <br> <br> <br>
        <div class="flex justify-between items-center mb-4">
            <input type="text" id="search" placeholder="Search tenants..." class="px-3 py-2 border rounded-lg w-64 focus:outline-none focus:ring-2 focus:ring-[#9BB2C4]">
        </div>
      
      
        <div class="overflow-x-auto">
            
            <table class="w-full text-base rounded-lg">
                <thead class="bg-[#fff]">
                
                    <tr>
                        <th class="px-3 py-2 text-left w-1/6">Task ID</th>
                        <th class="px-3 py-2 text-left w-1/6">Tille</th>
                        <th class="px-3 py-2 text-left w-1/8">Asignees</th>
                        <th class="px-3 py-2 text-left w-1/8">Status</th>
                        <th class="px-3 py-2 text-left w-1/8">Time spent</th>
                        <th class="px-3 py-2 text-left w-1/8">Date</th>
                        <th class="px-3 py-2 text-left w-1/8">Actions</th>
                    </tr>
                    <tr>
                        <th class="px-3 py-2 text-left w-1/6">#001</th>
                        <th class="px-3 py-2 text-left w-1/6">Property</th>
                        <th class="px-3 py-2 text-left w-1/8">Lim Nimol</th>
                        <th class="px-3 py-2 text-left w-1/8  ">###</th>
                        <th class="px-3 py-2 text-left w-1/8">8h30mn</th>
                        <th class="px-3 py-2 text-left w-1/8">05/06/2026</th>
                       
                        <th class="px-3 py-2 text-left w-1/8">
                            <i class="fa-solid fa-trash-can text-red-500 "></i>
                            <i class="fa-solid fa-eye  ml-2 text-blue-500"></i>
                            <i class="fa-solid fa-pen-to-square ml-2 text-green-500"></i>
                        </th>
                    </tr>

                </thead>  
            </table>

            <tbody>
                
                <tr class="border-b hover:bg-gray-50">
                    <td class="px-3 py-2">
                           
                        <div class="flex items-center gap-2">
                            

                            <div>
                                <div class="font-medium text-sm"></div>
                                <div class="text-gray-500 text-xs"></div>
                            </div>
                        </div>
                    </td>
                    
                </tr>
                
                <br>
                <div class="text-center">No Data</div>
            </tbody>            



        </div>

    </div>

    
    
    
</body>
</html>