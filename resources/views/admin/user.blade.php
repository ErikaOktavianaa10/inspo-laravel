@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">List User</h1>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Role</th>
                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Sign-Up Date</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($users as $index => $user)
                    <tr>
                        <td class="py-4 px-6">{{ $index + 1 }}</td>
                        <td class="py-4 px-6">{{ $user->name }}</td>
                        <td class="py-4 px-6">{{ $user->email }}</td>
                        <td class="py-4 px-6">{{ $user->role }}</td>
                        <td class="py-4 px-6">{{ $user->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
