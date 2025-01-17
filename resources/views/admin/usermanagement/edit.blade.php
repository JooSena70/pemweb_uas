@extends('admin.dashboard')

@section('content')
    <div class="p-6 bg-gradient-to-br from-gray-800 via-gray-700 to-gray-900 rounded-lg shadow-lg">
        <h2 class="text-3xl font-bold text-white mb-6">Edit User</h2>

        <form action="{{ route('admin.usermanagement.update', $user) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            <div>
                <label for="name" class="block text-sm font-semibold text-white mb-2">Name</label>
                <input type="text" name="name" id="name" 
                       value="{{ old('name', $user->name) }}"
                       class="w-full px-4 py-2 rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none">
                @error('name')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="email" class="block text-sm font-semibold text-white mb-2">Email</label>
                <input type="email" name="email" id="email" 
                       value="{{ old('email', $user->email) }}"
                       class="w-full px-4 py-2 rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none">
                @error('email')
                    <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end space-x-4">
                <button type="submit" 
                        class="bg-gradient-to-r from-blue-500 to-teal-500 hover:opacity-90 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-300">
                    Update User
                </button>
                <a href="{{ route('admin.usermanagement.index') }}" 
                   class="bg-gradient-to-r from-gray-500 to-gray-600 hover:opacity-90 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-300">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection