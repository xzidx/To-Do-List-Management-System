<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>
 @extends('layouts.app')

@section('content')
   
    <div class="max-w-7xl mx-auto mt-[100px] bg-blue-100 p-6 rounded-lg shadow-md">
         <h1 class="font-bold pb-5 text-2xl">My Profile </h1>

        <img class="rounded-full pb-3 w-32" src="{{ asset('storage/images/dara.jpg') }}" alt="Photo">

        <p class="font-bold text-2xl pb-2 pl-6 w-screen">Lucky</p>
        <p class="text-gray-700">Email: johndoe@example.com</p>
    </div>
 @endsection
</body>
</html>