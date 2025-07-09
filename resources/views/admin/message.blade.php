@extends('layouts.admin')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">List Message</h1>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">No</th>
                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">First Name</th>
                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Last Name</th>
                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Message</th>
                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Message Date</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach ($contacts as $index => $contact)
                    <tr>
                        <td class="py-4 px-6">{{ $index + 1 }}</td>
                        <td class="py-4 px-6">{{ $contact->first_name }}</td>
                        <td class="py-4 px-6">{{ $contact->last_name }}</td>
                        <td class="py-4 px-6">{{ $contact->message }}</td>
                        <td class="py-4 px-6">{{ $contact->created_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
