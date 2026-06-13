@extends('layouts.app')

@section('title', $product->nama_produk . ' - Cahaya Plalar')

@section('content')
{{-- Page Header --}}
<section class="relative bg-gradient-to-br from-primary via-primary-dark to-cyan-700 pt-24 pb-12 lg:pt-28 lg:pb-16">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-20 -right-20 w-60 h-60 rounded-full bg-white/5 blur-3xl"></div>
        <div class="absolute -bottom-20 -left-20 w-72 h-72 rounded-full bg-white/5 blur-3xl"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center gap-2 text-sm text-white/60 mb-4">
            <a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a>
            <i class="fas fa-chevron-right text-[10px]"></i>
            <a href="{{ route('katalog') }}" class="hover:text-white transition-colors">Katalog</a>
            <i class="fas fa-chevron-right text-[10px]"></i>
            <span class="text-white/80">{{ $product->nama_produk }}</span>
        </div>
        <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-white">{{ $product->nama_produk }}</h1>
    </div>
</section>

{{-- Product Detail --}}
<section class="py-10 lg:py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-14">

            {{-- Image --}}
            <div class="aspect-[4/3] rounded-2xl overflow-hidden bg-gradient-to-br from-gray-100 to-gray-200 shadow-lg flex items-center justify-center relative group" data-aos="fade-up">
                @php
                    $imageUrl = $product->gambar ? asset('storage/' . $product->gambar) : null;
                @endphp
                @if($imageUrl)
                    <img src="{{ $imageUrl }}" alt="{{ $product->nama_produk }}"
                        class="w-full h-full object-contain p-4 group-hover:scale-105 transition-transform duration-500">
                @else
                    <div class="text-center p-4">
                        <i class="fas fa-box-open text-6xl text-gray-300"></i>
                        <p class="text-sm text-gray-400 mt-3">Tidak Ada Gambar</p>
                    </div>
                @endif
            </div>

            {{-- Info --}}
            <div class="flex flex-col" data-aos="fade-up" data-aos-delay="100">
                @if($product->category)
                    <span class="text-xs font-semibold text-primary tracking-wider uppercase bg-primary/5 px-3 py-1.5 rounded-full w-fit">{{ $product->category->nama_kategori }}</span>
                @endif

                <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mt-3">{{ $product->nama_produk }}</h2>

                <div class="flex items-center gap-3 mt-4">
                    <span class="text-3xl font-bold text-primary">Rp {{ number_format($product->harga, 0, ',', '.') }}</span>
                    @if($product->stok > 0)
                        <span class="px-3 py-1 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">Tersedia</span>
                    @else
                        <span class="px-3 py-1 rounded-full text-xs font-medium bg-red-50 text-red-500 border border-red-200">Habis</span>
                    @endif
                </div>

                <div class="flex items-center gap-2 mt-2 text-sm text-gray-400">
                    <i class="fas fa-box"></i>
                    <span>Stok: {{ $product->stok }}</span>
                </div>

                <hr class="my-6 border-gray-200">

                {{-- Description --}}
                <div>
                    <h3 class="font-semibold text-gray-800 mb-2">Deskripsi Produk</h3>
                    <p class="text-gray-600 leading-relaxed">{{ $product->deskripsi ?? 'Tidak ada deskripsi untuk produk ini.' }}</p>
                </div>

                {{-- Actions --}}
                <div class="mt-auto pt-8 flex flex-col sm:flex-row gap-3">
                    <a href="https://wa.me/{{ $siteSettings->whatsapp }}?text=Halo%20Cahaya%20Plalar%2C%20saya%20ingin%20membeli%20{{ urlencode($product->nama_produk) }}%20(Rp%20{{ number_format($product->harga, 0, ',', '.') }})%2C%20apakah%20ready%3F"
                        target="_blank"
                        class="flex-1 inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-green-500 hover:bg-green-600 text-white font-semibold text-sm transition-all duration-200 shadow-lg shadow-green-500/25">
                        <i class="fab fa-whatsapp text-lg"></i>
                        Pesan via WhatsApp
                    </a>
                    <a href="{{ route('katalog') }}"
                        class="inline-flex items-center justify-center gap-2 px-6 py-3.5 rounded-xl bg-gray-100 hover:bg-gray-200 text-gray-700 font-medium text-sm transition-all duration-200">
                        <i class="fas fa-arrow-left"></i>
                        Kembali ke Katalog
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Related Products --}}
@if($relatedProducts->isNotEmpty())
<section class="py-10 lg:py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-10" data-aos="fade-up">
            <span class="text-primary font-semibold text-sm tracking-wider uppercase">Produk Terkait</span>
            <h2 class="text-2xl sm:text-3xl font-bold text-gray-800 mt-2">Produk <span class="text-primary">Serupa</span></h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach($relatedProducts as $related)
            <a href="{{ route('product.show', $related) }}" class="group bg-white rounded-xl shadow-sm hover:shadow-lg border border-gray-100 overflow-hidden transition-all duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
                <div class="aspect-[4/3] bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center overflow-hidden relative">
                    @php
                        $relImageUrl = $related->gambar ? asset('storage/' . $related->gambar) : null;
                    @endphp
                    @if($relImageUrl)
                        <img src="{{ $relImageUrl }}" alt="{{ $related->nama_produk }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                        <div class="text-center p-4 hidden">
                            <i class="fas fa-box-open text-4xl text-gray-300"></i>
                        </div>
                    @else
                        <div class="text-center p-4">
                            <i class="fas fa-box-open text-4xl text-gray-300"></i>
                        </div>
                    @endif
                </div>
                <div class="p-4">
                    @if($related->category)
                        <span class="text-xs text-primary font-medium">{{ $related->category->nama_kategori }}</span>
                    @endif
                    <h3 class="font-semibold text-gray-800 mt-1 group-hover:text-primary transition-colors duration-200">{{ $related->nama_produk }}</h3>
                    <div class="flex items-center justify-between mt-3 pt-3 border-t border-gray-100">
                        <span class="text-base font-bold text-primary">Rp {{ number_format($related->harga, 0, ',', '.') }}</span>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>
@endif
@endsection
