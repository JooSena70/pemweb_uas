@extends('admin.dashboard')

@section('content')
    <div class="p-6 bg-[#34495e] rounded-lg shadow-lg">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-3xl font-mono mb-6  text-white">Informasi Sampah</h2>
            <a href="{{ route('admin.informasisampah.create') }}" 
               class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Tambah Data Sampah
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-6 py-4 border-b border-gray-300 text-left text-xm font-mono text-gray-600 uppercase tracking-wider">No</th>
                        <th class="px-6 py-4 border-b border-gray-300 text-left text-xm font-mono text-gray-600 uppercase tracking-wider">Nama Sampah</th>
                        <th class="px-6 py-4 border-b border-gray-300 text-left text-xm font-mono text-gray-600 uppercase tracking-wider">Satuan</th>
                        <th class="px-6 py-4 border-b border-gray-300 text-left text-xm font-mono text-gray-600 uppercase tracking-wider">Harga per KG</th>
                        <th class="px-6 py-4 border-b border-gray-300 text-left text-xm font-mono text-gray-600 uppercase tracking-wider">Keterangan</th>
                        <th class="px-6 py-4 border-b border-gray-300 text-left text-xm font-mono text-gray-600 uppercase tracking-wider text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sampah as $index => $item)
                        <tr>
                            <td class="px-6 py-4 border-b">{{ $index + 1 }}</td>
                            <td class="px-6 py-4 border-b">{{ $item->nama_sampah }}</td>
                            <td class="px-6 py-4 border-b">{{ $item->satuan }}</td>
                            <td class="px-6 py-4 border-b">Rp {{ number_format($item->harga_per_kg, 0, ',', '.') }}</td>
                            <td class="px-6 py-4 border-b">{{ $item->keterangan }}</td>
                            <td class="px-6 py-4 border-b text-center">
                                <div class="flex justify-center space-x-2">
                                    <a href="{{ route('admin.informasisampah.edit', $item->id) }}" 
                                       class="text-blue-600 hover:text-blue-900">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                  d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                        </svg>
                                    </a>
                                    
                                    <form action="{{ route('admin.informasisampah.destroy', $item) }}" 
                                          method="POST" 
                                          onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');"
                                          class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection