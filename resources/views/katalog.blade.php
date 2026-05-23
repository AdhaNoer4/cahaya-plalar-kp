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
        {{-- Filter Bar --}}
        <div x-data="{ category: '{{ request('category') }}', search: '{{ request('search') }}' }" class="mb-8">
            <form action="{{ route('katalog') }}" method="GET" class="flex flex-col sm:flex-row gap-4">
                <div class="relative flex-1">
                    <i class="fas fa-search absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    <input type="text" name="search" x-model="search" placeholder="Cari produk..." value="{{ request('search') }}"
                        class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-200 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all duration-200">
                </div>
                <div class="relative sm:w-56">
                    <i class="fas fa-filter absolute left-4 top-1/2 -translate-y-1/2 text-gray-400"></i>
                    <select name="category" x-model="category" onchange="this.form.submit()"
                        class="w-full pl-11 pr-4 py-3 rounded-xl border border-gray-200 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all duration-200 appearance-none cursor-pointer">
                        <option value="">Semua Kategori</option>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ request('category') == $cat->id ? 'selected' : '' }}>{{ $cat->nama_kategori }}</option>
                        @endforeach
                    </select>
                    <i class="fas fa-chevron-down absolute right-4 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none text-xs"></i>
                </div>
                @if(request('search') || request('category'))
                <a href="{{ route('katalog') }}" class="inline-flex items-center gap-2 px-4 py-3 rounded-xl border border-gray-200 text-gray-500 hover:bg-gray-50 hover:text-gray-700 transition-all duration-200 text-sm">
                    <i class="fas fa-times"></i>
                    Reset
                </a>
                @endif
            </form>
        </div>

        {{-- Products Grid --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            @forelse($products as $product)
            <div class="group bg-white rounded-xl shadow-sm hover:shadow-lg border border-gray-100 overflow-hidden transition-all duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="{{ $loop->index * 30 }}">
                <div class="aspect-[4/3] bg-gradient-to-br from-gray-100 to-gray-200 flex items-center justify-center overflow-hidden relative">
                    @php
                        $imageUrl = $product->gambar ? asset('storage/' . $product->gambar) : null;
                    @endphp
                    @if($imageUrl)
                        <img src="{{ $imageUrl }}" alt="{{ $product->nama_produk }}"
                            class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500"
                            onerror="this.style.display='none';this.nextElementSibling.style.display='flex';">
                        <div class="text-center p-4 hidden">
                            <i class="fas fa-box-open text-4xl text-gray-300"></i>
                            <p class="text-xs text-gray-400 mt-2">Tidak Ada Gambar</p>
                        </div>
                    @else
                        <div class="text-center p-4">
                            <i class="fas fa-box-open text-4xl text-gray-300"></i>
                            <p class="text-xs text-gray-400 mt-2">Tidak Ada Gambar</p>
                        </div>
                    @endif
                    <div class="absolute top-3 right-3">
                        @if($product->stok > 0)
                            <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">Tersedia</span>
                        @else
                            <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-red-50 text-red-500 border border-red-200">Habis</span>
                        @endif
                    </div>
                </div>
                <div class="p-4">
                    @if($product->category)
                        <span class="text-xs text-primary font-medium">{{ $product->category->nama_kategori }}</span>
                    @endif
                    <h3 class="font-semibold text-gray-800 mt-1 group-hover:text-primary transition-colors duration-200">{{ $product->nama_produk }}</h3>
                    <p class="text-sm text-gray-500 mt-1 line-clamp-2">{{ $product->deskripsi ?? 'Tidak ada deskripsi' }}</p>
                    <div class="flex items-center justify-between mt-3 pt-3 border-t border-gray-100">
                        <span class="text-lg font-bold text-primary">Rp {{ number_format($product->harga, 0, ',', '.') }}</span>
                        <button class="w-9 h-9 rounded-lg bg-primary/5 text-primary hover:bg-primary hover:text-white flex items-center justify-center transition-all duration-200" title="Tambah ke Keranjang">
                            <i class="fas fa-shopping-cart text-sm"></i>
                        </button>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-16">
                <div class="w-24 h-24 mx-auto rounded-full bg-gray-100 flex items-center justify-center mb-4">
                    <i class="fas fa-box-open text-4xl text-gray-300"></i>
                </div>
                <h3 class="text-xl font-semibold text-gray-600">Produk Tidak Ditemukan</h3>
                <p class="text-gray-400 mt-2">Tidak ada produk yang sesuai dengan pencarian Anda</p>
                <a href="{{ route('katalog') }}" class="inline-flex items-center gap-2 mt-4 px-5 py-2.5 bg-primary text-white rounded-xl hover:bg-primary-dark transition-all duration-200 text-sm font-medium">
                    <i class="fas fa-undo"></i>
                    Tampilkan Semua
                </a>
            </div>
            @endforelse
        </div>

        {{-- Pagination --}}
        <div class="mt-10">
            {{ $products->withQueryString()->links() }}
        </div>
    </div>
</section>
@endsection
