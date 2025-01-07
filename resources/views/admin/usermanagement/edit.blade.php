<!-- resources/views/admin/usermanagement/edit.blade.php -->
@extends('admin.dashboard')

@section('content')
    <div class="p-6 bg-[#22b2a6] rounded-lg">
        <h2 class="text-3xl font-mono text-white mb-4">Edit User</h2>

        <form action="{{ route('admin.usermanagement.update', $user) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="name" class="block text-black text-xl font-mono mb-2">Name</label>
                <input type="text" name="name" id="name" 
                       value="{{ old('name', $user->name) }}"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <label for="email" class="block text-black text-xl font-mono mb-2">Email</label>
                <input type="email" name="email" id="email" 
                       value="{{ old('email', $user->email) }}"
                       class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('email')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" 
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Update User
                </button>
                <a href="{{ route('admin.usermanagement.index') }}" 
                   class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection