@extends('admin.dashboard')

@section('content')
    <div class="p-6 bg-gradient-to-br from-gray-800 via-gray-700 to-gray-900 rounded-lg shadow-lg">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-white">Konfirmasi Transaksi</h2>
        </div>

        @if(session('success'))
            <div class="bg-green-500/20 border-l-4 border-green-500 text-white px-4 py-3 rounded-lg mb-6 shadow-md">
                {{ session('success') }}
            </div>
        @endif

        <div class="overflow-x-auto rounded-lg shadow-lg">
            <table class="min-w-full bg-white rounded-lg">
                <thead class="bg-gradient-to-r from-teal-500 to-green-500 text-white">
                    <tr>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide uppercase">No</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide uppercase">Nama User</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide uppercase">Nama Sampah</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide uppercase">Berat (Kg)</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide uppercase">Alamat</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide uppercase">Tanggal</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide uppercase">Total</th>
                        <th class="px-6 py-4 text-left text-sm font-semibold tracking-wide uppercase">Status</th>
                        <th class="px-6 py-4 text-center text-sm font-semibold tracking-wide uppercase">Aksi</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                    @foreach($setor as $index => $item)
                        <tr class="hover:bg-gray-100 transition duration-300">
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $index + 1 }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $item->nama_user }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $item->nama_sampah }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ number_format($item->berat, 0, ',', '.') }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $item->alamat }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">{{ $item->tanggal }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">Rp {{ number_format($item->total, 0, ',', '.') }}</td>
                            <td class="px-6 py-4 text-sm text-gray-700">
                                <span class="px-3 py-1 rounded-full text-black {{ $item->status === 'Belum Di Verifikasi' ? 'Sudah di verifikasi' : 'Belum di verifikasi' }}">
                                    {{ $item->status }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-center">
                                <form action="{{ route('admin.riwayattranksasi.update', $item->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="status" value="{{ $item->status == 'Belum di verifikasi' ? 'Sudah di verifikasi' : 'Belum di verifikasi' }}">
                                    <button type="submit" class="text-red-500 hover:text-red-700">
                                        {{ $item->status == 'Belum Di verifikasi' ? 'Sudah di verifikasi' : 'Verifikasi' }}
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
