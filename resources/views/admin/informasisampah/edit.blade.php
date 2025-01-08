@extends('admin.dashboard')

@section('content')
    <div class="p-6 bg-[#34495e] rounded-lg">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-3xl font-mono text-white mb-4">Edit Data Sampah</h2>
    
        </div>

        <form action="{{ route('admin.informasisampah.update', $sampah) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            
            <div>
                <label for="nama_sampah" class="block text-white text-xl font-mono mb-2">Nama Sampah</label>
                <input type="text" name="nama_sampah" id="nama_sampah" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200"
                       value="{{ old('nama_sampah', $sampah->nama_sampah) }}" required>
                @error('nama_sampah')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="satuan" class="block text-white text-xl font-mono mb-2">Satuan</label>
                <input type="text" name="satuan" id="satuan" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200"
                       value="{{ old('satuan', $sampah->satuan) }}" required>
                @error('satuan')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="harga_per_kg" class="block text-white text-xl font-mono mb-2">Harga per KG (Rp)</label>
                <input type="number" name="harga_per_kg" id="harga_per_kg" 
                       class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200"
                       value="{{ old('harga_per_kg', $sampah->harga_per_kg) }}" required>
                @error('harga_per_kg')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="keterangan" class="block text-white text-xl font-mono mb-2">Keterangan</label>
                <textarea name="keterangan" id="keterangan" rows="3" 
                          class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-blue-300 focus:ring focus:ring-blue-200">{{ old('keterangan', $sampah->keterangan) }}</textarea>
                @error('keterangan')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="flex items-center justify-between">
                <button type="submit" 
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Update Data
                </button>

                <a href="{{ route('admin.informasisampah.index') }}" 
                    class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                    Cancel
                </a>
            </div>
        </form>
    </div>
@endsection