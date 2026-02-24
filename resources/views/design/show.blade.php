@extends('layouts.app')

@section('title', 'Design Details')

@section('content')

<div class="max-w-5xl mx-auto px-6 py-12">
    <div class="grid md:grid-cols-2 gap-12">
        
        {{-- LEFT SIDE: Image Gallery --}}
        <div>
            @if($design->images->isNotEmpty())
                {{-- Main Large Image --}}
                <div class="mb-4">
                    <img src="{{ asset('storage/' . $design->images->first()->img_path) }}" 
                         id="mainImage" 
                         class="w-full h-[500px] object-cover rounded-xl shadow-lg">
                </div>

                {{-- Thumbnails --}}
                <div class="grid grid-cols-3 gap-4">
                    @foreach($design->images as $image)
                        <img src="{{ asset('storage/' . $image->img_path) }}" 
                             class="h-24 w-full object-cover rounded-lg cursor-pointer hover:opacity-75 transition"
                             onclick="document.getElementById('mainImage').src = this.src">
                    @endforeach
                </div>
            @endif
        </div>

        {{-- RIGHT SIDE: Design Details --}}
        <div class="flex flex-col">
            <span class="text-blue-600 font-bold uppercase tracking-widest text-sm">
                {{ $design->category }}
            </span>
            <h1 class="text-4xl font-bold text-gray-900 mt-2">{{ $design->design_Name }}</h1>
            <p class="text-2xl text-gray-700 mt-4 font-light">₦{{ number_format($design->price) }}</p>
            
            <div class="mt-8 border-t pt-6">
                <h3 class="text-lg font-semibold">Description</h3>
                <p class="text-gray-600 mt-2 leading-relaxed">
                    {{ $design->description }}
                </p>
            </div>

            <div class="mt-auto pt-10">
                <a href="https://wa.me/09056484191?text={{ urlencode('Hello, I am interested in the ' . $design->design_Name . ' design.') }}" 
   target="_blank"
   class="bg-green-500 text-white px-8 py-4 rounded-full font-bold hover:bg-green-600 transition flex items-center justify-center">
    Order via WhatsApp
</a>
            </div>
        </div>
    </div>
</div>

@endsection
