<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Notification</title>
</head>
<body">

@extends('layouts.app')
@section('content')

        <div class=" max-w-7xl mx-auto bg-white  rounded-t-xl block">
           
            <div class="bg-white shadow-sm border-b-2  border-green- px-8 py-6 rounded-t-xl">
               
                <div class="flex justify-between items-center  ">
                    <h1 class="text-xl font-bold text-black">Notification</h1>
                     <span class="text-2xl "><i class=" fa-regular fa-bell"></i></span>
                   
                </div>
                
            </div>


             <div class="flex justify-between items-center shadow-sm px-8 py-4">
                    <h1 class="text-sm font-bold text-gray-500">All Notification</h1>
                    <span class="text-sm text-blue-700">Mark all as read</span>
                   
                </div>


                <div class="flex justify-between items-center shadow-sm px-8 py-4">
                    <div class="h-10 w-10 border rounded-full bg-green flex items-center gap-4"><img class="rounded-full" src="https://i.pinimg.com/736x/91/53/5b/91535bc90a800b532116028457cdd0f9.jpg" alt=""><p class="text-meduim text-sm">Mony</p></div>

                    <div class="text-center text-sm text-gray-700"><p>assigned task "Design landing page" to you</p></div>
                    
                    <span class="text-sm text-gray-700">2hour ago</span>
                   
                </div>

                 <div class="flex justify-between items-center shadow-sm px-8 py-4">
                    <div class="h-10 w-10 border rounded-full bg-green flex items-center gap-4"><img class="rounded-full" src="https://i.pinimg.com/736x/91/53/5b/91535bc90a800b532116028457cdd0f9.jpg" alt=""><p class="text-meduim text-sm">Mony</p></div>

                    <div class="text-center text-sm text-gray-700"><p>assigned task "Design landing page" to you</p></div>
                    
                    <span class="text-sm text-gray-700">2hour ago</span>
                   
                </div>


                 <div class="flex justify-between items-center shadow-sm px-8 py-4">
                    <div class="h-10 w-10 border rounded-full bg-green flex items-center gap-4"><img class="rounded-full" src="https://i.pinimg.com/736x/91/53/5b/91535bc90a800b532116028457cdd0f9.jpg" alt=""><p class="text-meduim text-sm">Mony</p></div>

                    <div class="text-center text-sm text-gray-700"><p>assigned task "Design landing page" to you</p></div>
                    
                    <span class="text-sm text-gray-700">2hour ago</span>
                   
                </div>

        

      
            
        </div>
@endsection

    </body>
</html>