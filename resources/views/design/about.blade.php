@extends('layouts.app')

@section('title', 'Our Story')

@section('content')
<div class="bg-white">
    <section class="py-20 bg-zinc-50">
        <div class="max-w-4xl mx-auto px-6 text-center">
            <span class="text-xs uppercase tracking-[0.5em] text-purple-600 font-bold block mb-4">Veeks Clothing</span>
            <h1 class="text-5xl md:text-7xl font-serif text-zinc-900 leading-tight">Artistry in every <br><span class="italic font-light">single stitch.</span></h1>
        </div>
    </section>

    <section class="max-w-7xl mx-auto px-6 py-24">
        <div class="grid md:grid-cols-2 gap-16 items-center">
            <div class="relative">
                <img src="{{ asset('image/img1.jpg') }}" class="rounded-2xl shadow-2xl w-full aspect-[4/5] object-cover" alt="Designer at work">
                <div class="absolute -bottom-8 -right-8 bg-purple-600 text-white p-8 rounded-2xl hidden lg:block shadow-xl">
                    <p class="text-3xl font-serif">100%</p>
                    <p class="text-[10px] uppercase tracking-widest font-bold opacity-80">Hand-Tailored</p>
                </div>
            </div>
            
            <div class="space-y-8">
                <h2 class="text-3xl font-light text-zinc-900">Born from a passion for <br><b>unapologetic elegance.</b></h2>
                <p class="text-zinc-500 leading-relaxed font-light">
                   At VEEKSCLOTHING, we create pieces that speak before you do.
With a focus on quality, neat finishing, and timeless class, every design is carefully crafted to bring out your confidence and individuality. We believe fashion should not just follow trends, it should define you. We serve all body types
                </p>
                <p class="text-zinc-500 leading-relaxed font-light">
                    VEEKSCLOTHING — Fashion That Defines You.
                </p>
                <div class="pt-6">
                    <a href="{{ route('designPage') }}" class="text-sm font-bold uppercase tracking-widest border-b-2 border-purple-600 pb-2 hover:text-purple-600 transition-all">
                        Explore the Collection
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection