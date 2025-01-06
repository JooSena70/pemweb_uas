@extends('layouts.admin')

@section('content')
<div class="container">
    <h2>Edit Profil</h2>
    <form method="POST" action="{{ route('profile.update') }}">
        @csrf
        @method('PATCH')

        <!-- Nama -->
        <div>
            <label for="name">Nama</label>
            <input id="name" type="text" name="name" value="{{ old('name', $user->name) }}" required autofocus>
        </div>

        <!-- Email -->
        <div>
            <label for="email">Email</label>
            <input id="email" type="email" name="email" value="{{ old('email', $user->email) }}" required>
        </div>

        <!-- Password -->
        <div>
            <label for="password">Password Baru</label>
            <input id="password" type="password" name="password">
        </div>

        <!-- Konfirmasi Password -->
        <div>
            <label for="password_confirmation">Konfirmasi Password</label>
            <input id="password_confirmation" type="password" name="password_confirmation">
        </div>

        <button type="submit">Simpan Perubahan</button>
    </form>

    <form method="POST" action="{{ route('profile.destroy') }}">
        @csrf
        @method('DELETE')
        <button type="submit" onclick="return confirm('Anda yakin ingin menghapus akun?')">Hapus Akun</button>
    </form>
</div>
@endsection
