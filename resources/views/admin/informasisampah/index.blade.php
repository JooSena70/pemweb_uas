@extends('admin.dashboard')

@section('content')
    <div class="p-6 bg-gradient-to-br from-gray-800 via-gray-700 to-gray-900 rounded-lg shadow-lg">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-white">Informasi Sampah</h2>
            <a href="{{ route('admin.informasisampah.create') }}" 
               class="bg-gradient-to-r from-teal-400 to-green-500 hover:opacity-90 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-300">
                Tambah Data Sampah
            </a>
        </div>

        @if(session('success'))
            <div class="bg-green-500/20 border-l-4 border-green-500 text-white px-4 py-3 rounded-lg mb-6 shadow-md">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto rounded-lg shadow-md">
            <table class="min-w-full bg-white rounded-lg">
                <thead class="bg-gradient-to-r from-teal-500 to-green-500 text-white">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide uppercase">No</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide uppercase">Nama Sampah</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide uppercase">Satuan</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide uppercase">Harga per KG</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide uppercase">Keterangan</th>
                        <th class="px-6 py-4 text-center text-sm font-semibold tracking-wide uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($sampah as $index => $item)
                        <tr class="hover:bg-gray-100 transition duration-300">
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $index + 1 }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $item->nama_sampah }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $item->satuan }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">Rp {{ number_format($item->harga_per_kg, 0, ',', '.') }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $item->keterangan }}</td>
                            <td class="px-6 py-4 text-center">
                                <div class="flex justify-center space-x-4">
                                    <a href="{{ route('admin.informasisampah.edit', $item->id) }}" 
                                       class="text-blue-500 hover:text-blue-700">
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
                                        <button type="submit" class="text-red-500 hover:text-red-700">
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