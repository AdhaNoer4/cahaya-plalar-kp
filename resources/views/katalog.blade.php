@extends('layouts.app')

@section('title', 'Katalog Produk - Cahaya Plalar')

@section('content')
{{-- Page Header --}}
<section class="relative bg-gradient-to-br from-primary via-primary-dark to-cyan-700 pt-24 pb-12 lg:pt-28 lg:pb-16">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-20 -right-20 w-60 h-60 rounded-full bg-white/5 blur-3xl"></div>
        <div class="absolute -bottom-20 -left-20 w-72 h-72 rounded-full bg-white/5 blur-3xl"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white">Katalog <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-amber-400">Produk</span></h1>
            <p class="text-white/70 mt-3 max-w-xl mx-auto">Jelajahi berbagai produk kebutuhan sehari-hari yang kami sediakan</p>
        </div>
    </div>
</section>

{{-- Filter & Products --}}
<section class="py-10 lg:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <livewire:product-catalog />
    </div>
</section>
@endsection
