@extends('layouts.app')

@section('content')

<div class="max-w-5xl mx-auto py-10">

    <!-- Profile Header Card -->
    <div class="bg-white shadow-md rounded-2xl p-6 flex items-center justify-between">

        <div class="flex items-center gap-5">

            <!-- ONLINE IMAGE -->
            <img src="https://i.pravatar.cc/150?img=12"
                 class="w-20 h-20 rounded-full object-cover border-4 border-gray-100">

            <div>
                <h1 class="text-2xl font-bold text-gray-800">Khai Loynas</h1>
                <p class="text-gray-500 text-sm">@khainosure-7112006</p>
            </div>

        </div>

        <button onclick="document.getElementById('edit-modal').classList.remove('hidden')"
                class="px-5 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
            Edit Profile
        </button>

    </div>

    <!-- Info Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-8">

        <div class="bg-white shadow-md rounded-2xl p-5">
            <h2 class="text-gray-500 text-sm">Full Name</h2>
            <p class="text-lg font-semibold text-gray-800 mt-1">Mr. Khai Loynas</p>
        </div>

        <div class="bg-white shadow-md rounded-2xl p-5">
            <h2 class="text-gray-500 text-sm">Username</h2>
            <p class="text-lg font-semibold text-gray-800 mt-1">@khainosure-7112006</p>
        </div>

        <div class="bg-white shadow-md rounded-2xl p-5 md:col-span-2">
            <h2 class="text-gray-500 text-sm">Email</h2>
            <p class="text-lg font-semibold text-gray-800 mt-1">
                khailoymestelokery@gmail.com
            </p>
        </div>

    </div>

</div>

<!-- MODAL -->
<div id="edit-modal"
     class="hidden fixed inset-0 bg-black/50 flex items-center justify-center">

    <div class="bg-white w-[450px] rounded-2xl p-6 shadow-xl">

        <!-- Header -->
        <div class="flex justify-between items-center mb-5">
            <h2 class="text-lg font-bold">Edit Profile</h2>

            <button onclick="document.getElementById('edit-modal').classList.add('hidden')"
                    class="text-gray-500 hover:text-black text-xl">
                ✕
            </button>
        </div>

        <!-- Form -->
        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PUT')

            <div class="space-y-4">

                <input type="text" name="full_name"
                       value="Mr. Khai Loynas"
                       class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-500 outline-none">

                <input type="text" name="username"
                       value="@khainosure-7112006"
                       class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-500 outline-none">

                <input type="email" name="email"
                       value="khailoymestelokery@gmail.com"
                       class="w-full border rounded-lg p-2 focus:ring-2 focus:ring-blue-500 outline-none">

            </div>

            <!-- Buttons -->
            <div class="flex justify-end gap-3 mt-6">

                <button type="button"
                        onclick="document.getElementById('edit-modal').classList.add('hidden')"
                        class="px-4 py-2 bg-gray-200 rounded-lg hover:bg-gray-300">
                    Cancel
                </button>

                <button type="submit"
                        class="px-5 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                    Save
                </button>

            </div>

        </form>

    </div>
</div>

@endsection