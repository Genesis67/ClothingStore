@extends('layouts.app')
@section('title', 'Edit Design')
@section('content')

<div class="bg-gray-100 min-h-screen p-8">
    <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-md p-8">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-xl font-bold text-gray-800">Edit Design: {{ $design->design_Name }}</h2>
            <a href="{{ route('adminHome') }}" class="text-sm text-gray-500 hover:text-blue-600">← Back to Admin</a>
        </div>
        
        <form action="{{ route('updateDesign', $design) }}" method="POST" enctype="multipart/form-data" class="space-y-5">
            @csrf
            @method('PUT')

            {{-- Design Name --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Design Name</label>
                <input type="text" name="design_Name" 
                    class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 border p-2.5" 
                    value="{{ old('design_Name', $design->design_Name) }}">
                @error('design_Name')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="grid grid-cols-2 gap-4">
                {{-- Category --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                    <select name="category" class="w-full border-gray-300 rounded-lg shadow-sm border p-2.5">
                        @php
                            $categories = ['Gowns', 'Two-Piece', 'Wedding-Attire', 'Dinner-Wear', 'ready-to-wear'];
                        @endphp
                        @foreach($categories as $cat)
                            <option value="{{ $cat }}" {{ old('category', $design->category) == $cat ? 'selected' : '' }}>
                                {{ ucfirst(str_replace('-', ' ', $cat)) }}
                            </option>
                        @endforeach
                    </select>
                    @error('category')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Price --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Price (₦)</label>
                    <input type="number" name="price" 
                        class="w-full border-gray-300 rounded-lg shadow-sm border p-2.5" 
                        value="{{ old('price', $design->price) }}">
                    @error('price')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="grid grid-cols-2 gap-4">
                {{-- Fabric --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Fabric</label>
                    <input type="text" name="fabric" 
                        class="w-full border-gray-300 rounded-lg shadow-sm border p-2.5" 
                        value="{{ old('fabric', $design->fabric) }}">
                    @error('fabric')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                {{-- Size --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Size</label>
                    <input type="text" name="size" 
                        class="w-full border-gray-300 rounded-lg shadow-sm border p-2.5" 
                        value="{{ old('size', $design->size) }}">
                    @error('size')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            {{-- Description --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea name="description" rows="4" 
                    class="w-full border-gray-300 rounded-lg shadow-sm border p-2.5">{{ old('description', $design->description) }}</textarea>
                @error('description')
                    <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Image Section --}}
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-2">Current Images</label>
                <div class="grid grid-cols-3 gap-2 mb-4">
                    @foreach($design->images as $image)
                        <div class="relative group">
                            <img src="{{ asset('storage/' . $image->img_path) }}" 
                                 class="h-24 w-full object-cover rounded-lg border shadow-sm">
                        </div>
                    @endforeach
                </div>

                <label class="block text-sm font-medium text-gray-700 mb-1">
                    Replace Images (Optional)
                </label>
                <input type="file" name="img_path[]" multiple 
                    class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
                <p class="text-xs text-gray-400 mt-1 italic">Uploading new images will replace existing ones.</p>
                @error('img_path.*')
                    <p class="text-red-500 text-xs mt-1">One or more files are invalid.</p>
                @enderror
            </div>

            {{-- Form Buttons --}}
            <div class="flex justify-end space-x-3 pt-4 border-t">
                <button type="button" onclick="window.history.back()" 
                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">
                    Cancel
                </button>
                <button type="submit" 
                    class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition shadow-sm">
                    Update Design
                </button>
            </div>
        </form>
    </div>
</div>

@endsection