@extends('admin.dashboard')

@section('content')
    <div class="p-6 bg-white rounded-lg shadow-lg">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-gray-800">Tambah Data Sampah</h2>
            <a href="{{ route('admin.informasisampah.index') }}" 
               class="bg-gradient-to-r from-teal-500 to-green-400 hover:opacity-90 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300">
                Kembali
            </a>
        </div>

        <form action="{{ route('admin.informasisampah.store') }}" method="POST" class="space-y-6">
            @csrf
            
            <div>
                <label for="nama_sampah" class="block text-sm font-medium text-gray-600">Nama Sampah</label>
                <input type="text" name="nama_sampah" id="nama_sampah" 
                       class="mt-2 w-full px-4 py-2 rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-teal-300 focus:outline-none"
                       value="{{ old('nama_sampah') }}" required>
                @error('nama_sampah')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="satuan" class="block text-sm font-medium text-gray-600">Satuan</label>
                <input type="text" name="satuan" id="satuan" 
                       class="mt-2 w-full px-4 py-2 rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-teal-300 focus:outline-none"
                       value="{{ old('satuan') }}" required>
                @error('satuan')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="harga_per_kg" class="block text-sm font-medium text-gray-600">Harga per KG (Rp)</label>
                <input type="number" name="harga_per_kg" id="harga_per_kg" 
                       class="mt-2 w-full px-4 py-2 rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-teal-300 focus:outline-none"
                       value="{{ old('harga_per_kg') }}" required>
                @error('harga_per_kg')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="keterangan" class="block text-sm font-medium text-gray-600">Keterangan</label>
                <textarea name="keterangan" id="keterangan" rows="4" 
                          class="mt-2 w-full px-4 py-2 rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-teal-300 focus:outline-none">{{ old('keterangan') }}</textarea>
                @error('keterangan')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-end">
                <button type="submit" 
                        class="bg-gradient-to-r from-blue-500 to-indigo-500 hover:opacity-90 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-300">
                    Simpan Data
                </button>
            </div>
        </form>
    </div>
@endsection