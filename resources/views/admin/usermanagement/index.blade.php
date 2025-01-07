<!-- resources/views/admin/usermanagement/index.blade.php -->
@extends('admin.dashboard')

@section('content')
<div class="container mx-auto px-4">
    <div class="bg-[#22b2a6] p-6 rounded-lg shadow-lg">
        <h2 class="text-3xl font-mono mb-6  text-white">User Management</h2>

        @if(session('success'))
            <div class="bg-[#FFFFFF] border border-green-800 text-green-600 px-4 py-3 rounded relative mb-4">
                {{ session('success') }}
            </div>
        @endif

        <div class="flex justify-center">
            <div class="overflow-x-auto w-full">
                <table class="min-w-full bg-white border border-gray-300 shadow-sm rounded-lg overflow-hidden">
                    <thead class="bg-gray-50">
                        <tr>
                            <th class="px-6 py-4 border-b border-gray-300 text-left text-xm font-mono text-gray-600 uppercase tracking-wider">No</th>
                            <th class="px-6 py-4 border-b border-gray-300 text-left text-xm font-mono text-gray-600 uppercase tracking-wider">Name</th>
                            <th class="px-6 py-4 border-b border-gray-300 text-left text-xm font-mono text-gray-600 uppercase tracking-wider">Email</th>
                            <th class="px-6 py-4 border-b border-gray-300 text-center text-xm font-mono text-gray-600 uppercase tracking-wider">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-300">
                        @foreach($users as $user)
                            <tr class="hover:bg-gray-50">
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $user->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $user->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ $user->email }}</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-center">
                                    <div class="flex justify-center space-x-4">
                                        <!-- Edit Icon -->
                                        <a href="{{ route('admin.usermanagement.edit', $user) }}" 
                                           class="text-blue-600 hover:text-blue-900 transition-colors duration-200">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" 
                                                      d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"/>
                                            </svg>
                                        </a>
                                        
                                        <!-- Delete Icon -->
                                        <form action="{{ route('admin.usermanagement.destroy', $user) }}" 
                                              method="POST" 
                                              onsubmit="return confirm('Are you sure you want to delete this user?');"
                                              class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900 transition-colors duration-200">
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
    </div>
</div>
@endsection