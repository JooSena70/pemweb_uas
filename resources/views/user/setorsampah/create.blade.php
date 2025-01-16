@extends('user.dashboard')

@section('content')
    <div class="p-6 bg-white rounded-lg">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold">Tambah Data Sampah</h2>
            <a href="{{ route('user.setorsampah.index') }}" 
               class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Kembali
            </a>
        </div>

        <form action="{{ route('user.setorsampah.store') }}" method="POST" class="space-y-4">
            @csrf
            
            <div>
                <label for="nama_user" class="block text-sm font-medium text-gray-700">Nama User</label>
                <input type="text" name="nama_user" id="nama_user" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200"
                       value="{{ old('nama_user') }}" required>
                @error('nama_user')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="nama_sampah" class="block text-sm font-medium text-gray-700">Nama Sampah</label>
                <input type="text" name="nama_sampah" id="nama_sampah" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200"
                       value="{{ old('nama_sampah') }}" required>
                @error('nama_sampah')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="berat" class="block text-sm font-medium text-gray-700">Berat (Kg)</label>
                <input type="number" name="berat" id="berat" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200"
                       value="{{ old('berat') }}" required>
                @error('berat')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="alamat" class="block text-sm font-medium text-gray-700">Alamat</label>
                <input type="text" name="alamat" id="alamat" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200"
                       value="{{ old('alamat') }}" required>
                @error('alamat')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="tanggal" class="block text-sm font-medium text-gray-700">Tanggal</label>
                <input type="date" name="tanggal" id="tanggal" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200"
                       value="{{ old('tanggal') }}" required>
                @error('tanggal')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit" 
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>
@endsection