@extends('layouts.app')

@section('title', 'Manage Designs')

@section('content')
<div class="bg-gray-100 min-h-screen p-8">
    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Manage Designs</h1>
            <a href="{{route('createForm')}}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg transition shadow">
                + Create New Design
            </a>
        </div>

        <!-- ✅ Changed overflow handling for mobile responsiveness -->
        <div class="bg-white rounded-xl shadow">
            <div class="overflow-x-auto">
                <table class="min-w-full text-left border-collapse">
                    <thead class="bg-gray-50 border-b">
                        <tr>
                            <th class="px-6 py-4 text-sm font-semibold text-gray-600">Design Name</th>
                            <th class="px-6 py-4 text-sm font-semibold text-gray-600">Category</th>
                            <th class="px-6 py-4 text-sm font-semibold text-gray-600">Price</th>
                            <th class="px-6 py-4 text-sm font-semibold text-gray-600 text-right">Actions</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100">
                        @foreach($designs as $design)
                        <tr class="hover:bg-gray-50 transition">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{ $design->design_Name }}
                            </td>
                            <td class="px-6 py-4 text-gray-600 whitespace-nowrap">
                                {{ $design->category }}
                            </td>
                            <td class="px-6 py-4 text-gray-600 whitespace-nowrap">
                                ₦{{ number_format($design->price) }}
                            </td>
                            <td class="px-6 py-4 text-right flex justify-end items-center space-x-3 whitespace-nowrap">
                                
                                {{-- Edit Button --}}
                                <a href="{{route('editForm', $design)}}" class="text-blue-600 hover:text-blue-800 font-medium">
                                    Edit
                                </a>

                                {{-- Delete Form (Required for destroy method) --}}
                                <form action="{{route('deleteDesign', $design)}}" method="POST" onsubmit="return confirm('Are you sure you want to delete this design?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-800 font-medium">
                                        Delete
                                    </button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @if($designs->isEmpty())
                <div class="p-10 text-center text-gray-500">
                    No designs found. <a href="{{ route('createForm') }}" class="text-blue-600 underline">Create one now!</a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
