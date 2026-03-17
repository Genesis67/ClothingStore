@extends('layouts.app')

@section('title', 'Designs')

@section('content')
<section class="max-w-7xl mx-auto px-6 py-20">

    <h2 class="text-4xl font-light text-center mb-12">
        Our Designs
    </h2>

    <div class="grid md:grid-cols-3 gap-8">

        {{-- START LOOP HERE --}}
        @foreach($designs as $design)
        
        <div class="bg-white rounded-lg shadow overflow-hidden flex flex-col">
           
            {{-- IMAGE SECTION --}}
            {{-- Switched to Storage::disk('s3') for Cloud compatibility --}}
            @if($design->images->isNotEmpty())
                <img src="{{ Storage::disk('s3')->url($design->images->first()->img_path) }}"
                     alt="Design Image"
                     class="h-80 w-full object-cover">
            @else
                {{-- Fallback if no image exists --}}
                <div class="h-80 w-full bg-gray-200 flex items-center justify-center text-gray-400">
                    No Image Available
                </div>
            @endif

            <div class="p-6 text-center">
                {{-- CATEGORY TAG --}}
                <span class="text-xs font-bold text-blue-600 uppercase tracking-widest">
                    {{$design->category}}</span>

                {{-- DESIGN NAME --}}
                <h4 class="text-xl font-semibold mt-2">{{$design->design_name}}</h4>

                {{-- DESCRIPTION --}}
                <p class="text-gray-500 text-sm mt-2 line-clamp-2">{{$design->description}}</p>

                {{-- PRICE --}}
                <div class="mt-4 text-lg font-bold text-gray-900">
                    ₦{{ number_format($design->price) }}
                </div>

                {{-- ACTION BUTTON --}}
                <a href="{{route('showPage', $design)}}" 
                   class="mt-6 block w-full bg-black text-white py-2 rounded hover:bg-gray-800 transition">
                    View Details
                </a>
            </div>
        </div>
        @endforeach
        {{-- END LOOP HERE --}}

    </div>

</section>
@endsection