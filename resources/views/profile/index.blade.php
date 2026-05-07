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

<div class="max-w-7xl mx-auto">
    <h1 class="font-bold text-2xl pb-5">My Profile</h1>

    {{-- Profile Header --}}
    <div class="bg-gray-300 pt-5 pb-2 px-5 rounded-lg mb-5">
        <img src="{{ asset('storage/images/dara.jpg') }}" alt="photo"
             class="w-[99px] rounded-full border-2 border-solid">
        <div class="flex place-content-between max-w-7xl">
            <h1 class="font-bold text-2xl pt-5">Mr. Khai loynas</h1>
            {{-- Edit Button --}}
            <button onclick="document.getElementById('edit-modal').classList.remove('hidden')"
                    class="bg-blue-500 text-white px-5 py-2 rounded-lg hover:bg-blue-600 self-end mb-1">
                Edit
            </button>
        </div>
    </div>

    {{-- Personal Info --}}
    <h1 class="font-bold text-xl">Personal infor</h1>
    <div class="pt-5 pb-2 px-5 rounded-lg mb-5">
        <h1 class="font-medium text-lg">full name</h1>
        <div class="border-2 w-[350px] py-1 px-2 mb-4 rounded-[5px] text-base">
            <p>Mr. Khai loynas$</p>
        </div>
        <h1 class="font-medium text-lg">User name</h1>
        <div class="border-2 w-[350px] py-1 px-2 mb-4 text-base rounded-[5px]">
            <p>@khainosure-7112006</p>
        </div>
        <h1 class="font-medium text-lg">Email</h1>
        <div class="border-2 w-[350px] py-1 px-2 text-base rounded-[5px]">
            <p>khailoymestelokery@gmail.com</p>
        </div>
    </div>
</div>

{{-- ========== MODAL ========== --}}
<div id="edit-modal"
     class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center">

    <div class="bg-white rounded-2xl shadow-2xl w-[480px] max-w-[95vw] p-7">

        {{-- Modal Header --}}
        <div class="flex items-center justify-between mb-6">
            <h2 class="text-lg font-bold">Edit Profile</h2>
            <button onclick="document.getElementById('edit-modal').classList.add('hidden')"
                    class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center
                           hover:bg-gray-200 text-gray-500 text-sm cursor-pointer">
                ✕
            </button>
        </div>

        {{-- Avatar Upload --}}
        <div class="flex items-center gap-4 bg-gray-50 rounded-xl p-4 mb-6">
            <img src="{{ asset('storage/images/dara.jpg') }}" alt="avatar"
                 class="w-[72px] h-[72px] rounded-full border-2 border-white shadow object-cover">
            <div>
                <p class="text-sm font-semibold text-gray-800">Profile Photo</p>
                <p class="text-xs text-gray-400 mt-1 mb-2">JPG, PNG or GIF · max 2MB</p>
                <label for="avatar-file"
                       class="inline-block border border-blue-500 text-blue-500 text-xs font-semibold
                              px-3 py-1.5 rounded-lg cursor-pointer hover:bg-blue-500 hover:text-white transition">
                    Upload Photo
                </label>
                <input type="file" id="avatar-file" name="avatar" accept="image/*" class="hidden">
            </div>
        </div>

        {{-- Form --}}
        <form action="{{ route('profile.update') }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label class="block text-xs font-semibold text-gray-400 mb-1.5">Full Name</label>
                <input type="text" name="full_name" value="Mr. Khai loynas$"
                       class="w-full border-[1.5px] border-gray-200 rounded-lg px-3 py-2 text-sm
                              focus:outline-none focus:border-blue-500 bg-gray-50">
            </div>

            <div class="mb-4">
                <label class="block text-xs font-semibold text-gray-400 mb-1.5">User Name</label>
                <input type="text" name="username" value="@khainosure-7112006"
                       class="w-full border-[1.5px] border-gray-200 rounded-lg px-3 py-2 text-sm
                              focus:outline-none focus:border-blue-500 bg-gray-50">
            </div>

            <div class="mb-4">
                <label class="block text-xs font-semibold text-gray-400 mb-1.5">Email</label>
                <input type="email" name="email" value="khailoymestelokery@gmail.com"
                       class="w-full border-[1.5px] border-gray-200 rounded-lg px-3 py-2 text-sm
                              focus:outline-none focus:border-blue-500 bg-gray-50">
            </div>

            {{-- Actions --}}
            <div class="flex justify-end gap-3 mt-6">
                <button type="button"
                        onclick="document.getElementById('edit-modal').classList.add('hidden')"
                        class="px-5 py-2 bg-gray-100 text-gray-500 font-semibold text-sm rounded-lg hover:bg-gray-200">
                    Cancel
                </button>
                <button type="submit"
                        class="px-6 py-2 bg-blue-500 hover:bg-blue-600 text-white font-semibold text-sm rounded-lg">
                    Save Changes
                </button>
            </div>
        </form>
    </div>
</div>

@endsection
</body>
</html>