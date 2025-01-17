@extends('user.dashboard')

@section('content')
    <div class="p-6 bg-[#34495e] rounded-lg shadow-lg">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-3xl font-mono mb-6  text-white">Infromasi Sampah</h2>
            <a href="{{ route('user.setorsampah.create') }}" 
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
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection