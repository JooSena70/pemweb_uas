@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-10">
    <h2 class="text-3xl font-bold mb-8 text-center text-white p-4 rounded-lg gradient-primary shadow-md">
        Edit Profil
    </h2>

    <form method="POST" action="{{ route('profile.update') }}" class="gradient-card p-8 rounded-xl shadow-lg">
        @csrf
        @method('PATCH')

        <!-- Nama -->
        <div class="mb-6">
            <label for="name" class="block text-gray-700 font-medium mb-2">Nama</label>
            <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}" 
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500"
                   required autofocus>
        </div>

        <!-- Email -->
        <div class="mb-6">
            <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email', $user->email) }}" 
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500"
                   required>
        </div>

        <!-- Password Baru -->
        <div class="mb-6">
            <label for="password" class="block text-gray-700 font-medium mb-2">Password Baru</label>
            <input id="password" type="password" name="password" 
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500">
        </div>

        <!-- Konfirmasi Password -->
        <div class="mb-6">
            <label for="password_confirmation" class="block text-gray-700 font-medium mb-2">Konfirmasi Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation" 
                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-teal-500">
        </div>

        <!-- Tombol Simpan -->
        <div class="flex justify-end">
            <button type="submit" 
                    class="px-6 py-3 bg-teal-500 text-white font-bold rounded-lg hover:bg-teal-600 transition duration-300">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection