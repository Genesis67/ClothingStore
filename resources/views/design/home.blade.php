@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="relative overflow-hidden">
    <div class="absolute top-0 left-1/4 w-96 h-96 bg-purple-200/20 blur-[120px] rounded-full -z-10"></div>

    <section class="max-w-7xl mx-auto px-6 py-12 md:py-24">
        <div class="grid md:grid-cols-12 gap-8 md:gap-12 items-start">
            
            <div class="md:col-span-5 space-y-12">
                <div class="space-y-6">
                    <div class="mb-8">
                        <span class="inline-block text-2xl md:text-3xl font-black uppercase tracking-[0.2em] bg-gradient-to-r from-purple-600 via-indigo-500 to-purple-800 bg-clip-text text-transparent drop-shadow-sm">
                            Veeks Clothing
                        </span>
                        <div class="h-1 w-20 bg-purple-600 mt-2 rounded-full"></div>
                    </div>
                    <h2 class="text-5xl md:text-7xl font-light tracking-tight text-zinc-900 leading-tight">
                        Custom Fashion <br>
                        <span class="font-semibold text-zinc-950">Made with Elegance</span>
                    </h2>
                    <p class="text-zinc-500 text-lg max-w-md leading-relaxed font-light">
                        Bespoke designs crafted for confidence and style. Experience the artistry of handcrafted luxury.
                    </p>
                    <div class="flex flex-wrap gap-5">
                        <a href="{{route('designPage')}}"
                           class="px-8 py-4 bg-zinc-900 text-white rounded-full font-bold tracking-widest text-xs uppercase hover:bg-purple-700 transition-all shadow-lg">
                            View Collections
                        </a>
                        <a href="{{route('contactPage')}}"
                           class="px-8 py-4 border border-zinc-300 text-zinc-900 rounded-full font-bold tracking-widest text-xs uppercase hover:bg-zinc-900 hover:text-white transition-all">
                            Order Custom Design
                        </a>
                    </div>
                </div>

                <div class="relative group aspect-[4/5] overflow-hidden rounded-2xl shadow-xl bg-zinc-100">
                    <img src="{{ asset('image/sample1.jpeg') }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-105" alt="Showcase 1">
                </div>

                <div class="relative group aspect-[4/5] overflow-hidden rounded-2xl shadow-xl bg-zinc-100 md:w-3/4 ml-auto">
                    <img src="{{ asset('image/sample6.jpeg') }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-105" alt="Showcase 6">
                </div>
            </div>

            <div class="md:col-span-7 pt-12 md:pt-24">
                <div class="grid grid-cols-2 gap-4 md:gap-8">
                    <div class="space-y-4 md:space-y-8">
                        <div class="relative group aspect-[4/5] overflow-hidden rounded-2xl shadow-xl bg-zinc-100 border-4 border-white">
                            <img src="{{ asset('image/sample2.jpeg') }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-105" alt="Showcase 2">
                        </div>
                        <div class="relative group aspect-[4/5] overflow-hidden rounded-2xl shadow-xl bg-zinc-100 border-4 border-white">
                            <img src="{{ asset('image/sample3.jpeg') }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-105" alt="Showcase 3">
                        </div>
                        <div class="relative group aspect-[4/5] overflow-hidden rounded-2xl shadow-xl bg-zinc-100 border-4 border-white">
                            <img src="{{ asset('image/sample7.jpeg') }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-105" alt="Showcase 7">
                        </div>
                    </div>
                    
                    <div class="space-y-4 md:space-y-8 mt-12 md:mt-24">
                        <div class="relative group aspect-[4/5] overflow-hidden rounded-2xl shadow-xl bg-zinc-100 border-4 border-white">
                            <img src="{{ asset('image/sample4.jpeg') }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-105" alt="Showcase 4">
                        </div>
                        <div class="relative group aspect-[4/5] overflow-hidden rounded-2xl shadow-xl bg-zinc-100 border-4 border-white">
                            <img src="{{ asset('image/sample5.jpeg') }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-105" alt="Showcase 5">
                        </div>
                        <div class="relative group aspect-[4/5] overflow-hidden rounded-2xl shadow-xl bg-zinc-100 border-4 border-white">
                            <img src="{{ asset('image/sample8.jpeg') }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-105" alt="Showcase 8">
                        </div>
                        <div class="relative group aspect-[4/5] overflow-hidden rounded-2xl shadow-xl bg-zinc-100 border-4 border-white">
                            <img src="{{ asset('image/sample9.jpeg') }}" class="w-full h-full object-cover transition duration-700 group-hover:scale-105" alt="Showcase 9">
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-white py-20 px-6 sm:px-12 lg:px-24 border-t border-zinc-50">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-16">
                <div>
                    <span class="text-xs uppercase tracking-widest text-zinc-400 font-bold">Shop the Latest</span>
                    <h2 class="text-4xl font-serif mt-2 text-zinc-900">New Arrivals</h2>
                </div>
                <a href="{{route('designPage')}}" class="mt-4 md:mt-0 text-zinc-500 hover:text-black transition-colors duration-300 border-b border-zinc-200 pb-1 text-sm font-medium">
                    Browse All Designs &rarr;
                </a>
            </div>

            <div class="grid grid-cols-1 gap-y-16 sm:grid-cols-2 sm:gap-x-8 lg:grid-cols-4">
                @foreach($newestArrivals as $product)
                    <div class="group relative flex flex-col">
                        <div class="relative aspect-[3/4] w-full overflow-hidden bg-zinc-50 rounded-lg">
                            <img src="{{ asset('storage/' . $product->images->first()->img_path) }}" 
                                 alt="{{ $product->design_Name }}" 
                                 class="h-full w-full object-cover object-center transition-transform duration-500 group-hover:scale-110">
                            
                            <div class="absolute inset-0 flex items-end p-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <a href="{{ route('showPage', $product->id) }}" class="w-full bg-white/95 backdrop-blur-sm py-3 text-center text-[10px] font-bold uppercase tracking-widest text-zinc-900 shadow-xl">
                                    View Details
                                </a>
                            </div>
                        </div>

                        <div class="mt-6 flex justify-between items-start">
                            <div>
                                <h3 class="text-sm font-semibold text-zinc-900 uppercase tracking-tight">{{ $product->design_Name }}</h3>
                                <p class="mt-1 text-[10px] text-zinc-400 uppercase tracking-[0.2em]">{{ $product->category }}</p>
                            </div>
                            <p class="text-sm font-bold text-zinc-950">₦{{ number_format($product->price) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</div>
@endsection