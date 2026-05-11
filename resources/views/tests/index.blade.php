<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Test</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
</head>
<body>

@extends('layouts.app')
@section('content')


<div class="max-h-7xl m-auto bg-slate-50 py-14 px-4">
        <form action="{{ route('test.store') }}" method="POST">
                  @csrf
                <div class="rounded-sm space-y-2"></div>
                <label for="name" class="block text-sm">User name</label><br>
                        <input type="text" name="name" placeholder="name"
                         class="rounded-lg relative w-full py-3 px-4 border broder-[#898989]"
                         ><br><br>

                <label for="phone">Phone Number</label>    
                <input type="text" name="phone" placeholder="....." class="rounded-lg relative w-full py-3 px-4 border broder-[#898989] text-gray-700" >
                <br><br>
                <div class>
                        <button type="submit" class="relative flex justify-center border broder-[#898989] rounded-lg py-3 px-4 ">Send</button>
                </div>
        </form>
</div>

 
@endsection
        
</body>
</html>