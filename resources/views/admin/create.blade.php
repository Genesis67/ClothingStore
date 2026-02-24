@extends('layouts.app')
@section('title', 'Home')
@section('content')

<div class="bg-gray-100 min-h-screen p-8">
    <div class="max-w-2xl mx-auto bg-white rounded-xl shadow-md p-8">
        <h2 class="text-xl font-bold text-gray-800 mb-6">Add New Design</h2>
        
        <form action="{{route('createDesign')}}" method="POST" enctype="multipart/form-data" class="space-y-5">
        @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Design Name</label>
                <input type="text" name="design_Name" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-blue-500 focus:border-blue-500 border p-2.5" value="{{ old('design_Name') }}">
                @error('design_Name')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
            </div>

            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                    <select name="category" class="w-full border-gray-300 rounded-lg shadow-sm border p-2.5">
                        <option>Gowns</option>
                        <option>Two-Piece</option>
                        <option>Wedding-Attire</option>
                          <option>Dinner-Wear</option>
                           <option>ready-to-wear</option>
                    </select>
                           @error('category')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Price (₦)</label>
                    <input type="number" name="price" class="w-full border-gray-300 rounded-lg shadow-sm border p-2.5">
                </div>
                       @error('price')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
            </div>
  <div class="grid grid-cols-2 gap-4">
         <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Fabric</label>
                    <input type="text" name="fabric" class="w-full border-gray-300 rounded-lg shadow-sm border p-2.5">
                       @error('fabric')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
                </div>
                 <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Size</label>
                    <input type="text" name="size" class="w-full border-gray-300 rounded-lg shadow-sm border p-2.5">
                       @error('size')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
                </div>
  </div>
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                <textarea name="description" rows="4" class="w-full border-gray-300 rounded-lg shadow-sm border p-2.5"></textarea>
                       @error('description')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
            </div>

            <div>
    <label class="block text-sm font-medium text-gray-700 mb-1">
        Upload Design Images (Select up to 3)
    </label>
    <input 
        type="file" 
        name="img_path[]" 
        multiple 
        class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100">
    <p class="text-xs text-gray-400 mt-1">You can hold Ctrl (or Cmd) to select multiple files.</p>
    @error('img_path.*')
    <p class="text-red-500 text-xs mt-1">One or more of your images are invalid.</p>
@enderror
</div>

            <div class="flex justify-end space-x-3 pt-4">
                <button type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50">Cancel</button>
                <button type="submit" class="px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-lg hover:bg-blue-700 transition">Save Design</button>
            </div>
        </form>
    </div>
</div>
@endsection