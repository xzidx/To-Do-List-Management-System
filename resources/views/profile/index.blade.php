@extends('layouts.app')

@section('content')

<div class="max-w-5xl mx-auto py-10">

    <!-- PROFILE CARD -->
    <div class="bg-white shadow-md rounded-2xl p-6 flex items-center justify-between">

        <div class="flex items-center gap-5">

            <!-- ONLINE IMAGE -->
            <img src="https://i.pravatar.cc/150?img=12"
                 class="w-20 h-20 rounded-full object-cover border-4 border-gray-100">

            <div>
                <h1 class="text-2xl font-bold text-gray-800">
                    {{ $user->name }}
                </h1>

                <p class="text-gray-500 text-sm">
                    {{ '@' . ($user->username ?? 'user') }}
                </p>
            </div>

        </div>

        <button onclick="document.getElementById('edit-modal').classList.remove('hidden')"
                class="px-5 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
            Edit Profile
        </button>

    </div>

    <!-- INFO -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-5 mt-8">

        <div class="bg-white shadow-md rounded-2xl p-5">
            <h2 class="text-gray-500 text-sm">Full Name</h2>
            <p class="text-lg font-semibold text-gray-800 mt-1">
                {{ $user->name }}
            </p>
        </div>

        <div class="bg-white shadow-md rounded-2xl p-5">
            <h2 class="text-gray-500 text-sm">Username</h2>
            <p class="text-lg font-semibold text-gray-800 mt-1">
                {{ $user->username }}
            </p>
        </div>

        <div class="bg-white shadow-md rounded-2xl p-5 md:col-span-2">
            <h2 class="text-gray-500 text-sm">Email</h2>
            <p class="text-lg font-semibold text-gray-800 mt-1">
                {{ $user->email }}
            </p>
        </div>

    </div>

</div>

<!-- MODAL -->
<div id="edit-modal"
     class="hidden fixed inset-0 bg-black/50 flex items-center justify-center">

    <div class="bg-white w-[450px] rounded-2xl p-6">

        <h2 class="text-lg font-bold mb-5">Edit Profile</h2>

        <form action="{{ route('profile.update') }}" method="POST">
            @csrf
            @method('PUT')

            <input type="text" name="name"
                   value="{{ $user->name }}"
                   class="w-full border rounded-lg p-2 mb-3">

            <input type="text" name="username"
                   value="{{ $user->username }}"
                   class="w-full border rounded-lg p-2 mb-3">

            <input type="email" name="email"
                   value="{{ $user->email }}"
                   class="w-full border rounded-lg p-2 mb-3">

            <div class="flex justify-end gap-3">

                <button type="button"
                        onclick="document.getElementById('edit-modal').classList.add('hidden')"
                        class="px-4 py-2 bg-gray-200 rounded-lg">
                    Cancel
                </button>

                <button type="submit"
                        class="px-5 py-2 bg-blue-500 text-white rounded-lg">
                    Save
                </button>

            </div>

        </form>

    </div>
</div>

@endsection