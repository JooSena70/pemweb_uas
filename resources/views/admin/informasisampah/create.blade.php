@extends('admin.dashboard')

@section('content')
    <div class="p-6 bg-white rounded-lg">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-2xl font-semibold">Tambah Data Sampah</h2>
            <a href="{{ route('admin.informasisampah.index') }}" 
               class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Kembali
            </a>
        </div>

        <form action="{{ route('admin.informasisampah.store') }}" method="POST" class="space-y-4">
            @csrf
            
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
                <label for="satuan" class="block text-sm font-medium text-gray-700">Satuan</label>
                <input type="text" name="satuan" id="satuan" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200"
                       value="{{ old('satuan') }}" required>
                @error('satuan')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="harga_per_kg" class="block text-sm font-medium text-gray-700">Harga per KG (Rp)</label>
                <input type="number" name="harga_per_kg" id="harga_per_kg" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200"
                       value="{{ old('harga_per_kg') }}" required>
                @error('harga_per_kg')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="keterangan" class="block text-sm font-medium text-gray-700">Keterangan</label>
                <textarea name="keterangan" id="keterangan" rows="3" 
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200">{{ old('keterangan') }}</textarea>
                @error('keterangan')
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