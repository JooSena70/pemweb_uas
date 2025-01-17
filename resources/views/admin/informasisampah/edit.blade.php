@extends('admin.dashboard')

@section('content')
    <div class="p-6 bg-[#34495e] rounded-lg shadow-lg">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-mono text-white">Edit Data Sampah</h2>
        </div>

        <form action="{{ route('admin.informasisampah.update', $sampah) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            
            <div>
                <label for="nama_sampah" class="block text-white text-lg font-semibold mb-2">Nama Sampah</label>
                <input type="text" name="nama_sampah" id="nama_sampah" 
                       class="mt-2 w-full px-4 py-2 rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none"
                       value="{{ old('nama_sampah', $sampah->nama_sampah) }}" required>
                @error('nama_sampah')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="satuan" class="block text-white text-lg font-semibold mb-2">Satuan</label>
                <input type="text" name="satuan" id="satuan" 
                       class="mt-2 w-full px-4 py-2 rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none"
                       value="{{ old('satuan', $sampah->satuan) }}" required>
                @error('satuan')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="harga_per_kg" class="block text-white text-lg font-semibold mb-2">Harga per KG (Rp)</label>
                <input type="number" name="harga_per_kg" id="harga_per_kg" 
                       class="mt-2 w-full px-4 py-2 rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none"
                       value="{{ old('harga_per_kg', $sampah->harga_per_kg) }}" required>
                @error('harga_per_kg')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="keterangan" class="block text-white text-lg font-semibold mb-2">Keterangan</label>
                <textarea name="keterangan" id="keterangan" rows="4" 
                          class="mt-2 w-full px-4 py-2 rounded-lg border border-gray-300 shadow-sm focus:ring-2 focus:ring-blue-400 focus:outline-none">{{ old('keterangan', $sampah->keterangan) }}</textarea>
                @error('keterangan')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex justify-between items-center">
                <button type="submit" 
                        class="bg-gradient-to-r from-blue-500 to-teal-500 hover:opacity-90 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-300">
                    Update Data
                </button>

                <a href="{{ route('admin.informasisampah.index') }}" 
                   class="bg-gradient-to-r from-gray-500 to-gray-600 hover:opacity-90 text-white font-semibold py-2 px-6 rounded-lg shadow-md transition duration-300">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection