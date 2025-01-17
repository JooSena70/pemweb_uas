@extends('admin.dashboard')

@section('content')
    <div class="p-6 bg-[#34495e] rounded-lg shadow-lg">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-3xl font-mono mb-6  text-white">Konfirmasi Tranksasi</h2>
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
                    <th class="px-6 py-4 border-b border-gray-300 text-left text-xm font-mono text-gray-600 uppercase tracking-wider">Nama User</th>
                    <th class="px-6 py-4 border-b border-gray-300 text-left text-xm font-mono text-gray-600 uppercase tracking-wider">Nama Sampah</th>
                    <th class="px-6 py-4 border-b border-gray-300 text-left text-xm font-mono text-gray-600 uppercase tracking-wider">Berat (Kg)</th>
                    <th class="px-6 py-4 border-b border-gray-300 text-left text-xm font-mono text-gray-600 uppercase tracking-wider">Alamat</th>
                    <th class="px-6 py-4 border-b border-gray-300 text-left text-xm font-mono text-gray-600 uppercase tracking-wider">Tanggal</th>
                    <th class="px-6 py-4 border-b border-gray-300 text-left text-xm font-mono text-gray-600 uppercase tracking-wider">Total</th>
                    <th class="px-6 py-4 border-b border-gray-300 text-left text-xm font-mono text-gray-600 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-4 border-b border-gray-300 text-left text-xm font-mono text-gray-600 uppercase tracking-wider text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($setor as $index => $item)
                        <tr>
                        <td class="px-6 py-4 border-b">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 border-b">{{ $item->nama_user }}</td>
                        <td class="px-6 py-4 border-b">{{ $item->nama_sampah }}</td>
                        <td class="px-6 py-4 border-b">{{ number_format($item->berat, 0, ',', '.') }}</td>
                        <td class="px-6 py-4 border-b">{{ $item->alamat }}</td>
                        <td class="px-6 py-4 border-b">{{ $item->tanggal }}</td>
                        <td class="px-6 py-4 border-b">{{ $item->total }}</td>
                        <td class="px-6 py-4 border-b">{{ $item->status}}</td>
                        <td class="px-6 py-4 border-b text-center">
                                <div class="flex justify-center space-x-2">
                                    <form action="{{ route('admin.riwayattranksasi.update', $item->id) }}" method="POST" style="display:inline;"
                                       class="text-blue-600 hover:text-blue-900">
                                       @csrf
                                       @method('PUT')
                                       <input type="hidden" name="status" value="{{ $item->status == 'Belum Di Verifikasi' ? 'Belum Di Verifikasi' : 'Sudah Di Verifikasi' }}">
                                       <button type="submit">
                                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                    d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
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