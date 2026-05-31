@extends('layouts.app')

@section('title', 'Cahaya Plalar - Toko Kebutuhan Sehari-hari')

@section('content')



{{-- Hero Section --}}
<section id="three-bg-container" class="relative overflow-hidden min-h-[450px] sm:min-h-[600px] flex items-center">
    {{-- Background Image --}}
    <div class="absolute inset-0">
        <img src="{{ asset('img/IMG_20260117_124646.webp') }}" alt="Cahaya Plalar" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/60 to-black/40"></div>
    </div>
    {{-- Floating decorative elements --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-20 -left-20 w-72 h-72 rounded-full bg-primary/10 blur-3xl animate-float"></div>
        <div class="absolute -bottom-20 -right-20 w-96 h-96 rounded-full bg-secondary/5 blur-3xl animate-float" style="animation-delay: -2s"></div>
    </div>
    {{-- Three.js particles canvas injected here --}}

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16 lg:py-32">
        <div class="max-w-3xl">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 text-white/90 text-sm font-medium mb-6 backdrop-blur-sm border border-white/10" data-aos="fade-up">
                <i class="fas fa-store text-xs"></i>
                Toko Kebutuhan Sehari-hari
            </div>
                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white leading-tight mb-6" data-aos="fade-up" data-aos-delay="100" data-parallax-speed="0.06">
                Selamat Datang di <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 via-amber-400 to-yellow-300 animate-gradient">Cahaya Plalar</span>
            </h1>
            <p class="text-lg sm:text-xl text-white/80 max-w-xl mb-8" data-aos="fade-up" data-aos-delay="200" data-parallax-speed="0.04">
                Toko Kebutuhan Sehari-hari Terpercaya di Plalar. Menyediakan berbagai produk berkualitas untuk kebutuhan rumah tangga Anda.
            </p>
            <div class="flex flex-wrap gap-4" data-aos="fade-up" data-aos-delay="300">
                <a href="{{ route('katalog') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-white text-primary-dark font-semibold rounded-xl shadow-lg hover:shadow-xl hover:-translate-y-0.5 transition-all duration-200">
                    Lihat Katalog
                    <i class="fas fa-arrow-right text-sm"></i>
                </a>
                <a href="#kontak" class="inline-flex items-center gap-2 px-6 py-3 bg-white/10 text-white font-semibold rounded-xl border border-white/20 hover:bg-white/20 backdrop-blur-sm transition-all duration-200">
                    <i class="fas fa-phone-alt text-sm"></i>
                    Hubungi Kami
                </a>
            </div>
        </div>

    </div>
</section>

{{-- About Section --}}
<section class="py-12 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div data-aos="fade-right">
                <span class="text-primary font-semibold text-sm tracking-wider uppercase">Tentang Kami</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mt-2 mb-6">Menyediakan Kebutuhan <span class="text-primary">Sehari-hari</span> Anda</h2>
                <div class="space-y-4 text-gray-600 leading-relaxed">
                    <p>Cahaya Plalar adalah toko kebutuhan sehari-hari yang berlokasi di Gedongrejo, Kaliwuluh, Kebakkramat, Karanganyar. Kami berkomitmen untuk menyediakan produk-produk berkualitas dengan harga yang terjangkau bagi masyarakat sekitar.</p>
                    <p>Berdiri sejak tahun 2009, kami telah melayani ribuan pelanggan dan terus berkembang untuk memberikan pelayanan terbaik. Kami menyediakan berbagai macam kebutuhan pokok, sembako, perlengkapan rumah tangga, dan banyak lagi.</p>
                </div>
                <div class="grid grid-cols-3 gap-3 sm:gap-5 mt-8">
                    <div class="text-center p-3 sm:p-4 rounded-xl bg-primary/5">
                        <div class="text-xl sm:text-3xl font-bold text-primary" x-data><span x-countup="{ start: 0, end: 500, duration: 2000 }">0</span>+</div>
                        <div class="text-xs sm:text-sm text-gray-500 mt-1">Produk</div>
                    </div>
                    <div class="text-center p-3 sm:p-4 rounded-xl bg-secondary/5">
                        <div class="text-xl sm:text-3xl font-bold text-secondary" x-data><span x-countup="{ start: 0, end: 1000, duration: 2500 }">0</span>+</div>
                        <div class="text-xs sm:text-sm text-gray-500 mt-1">Pelanggan</div>
                    </div>
                    <div class="text-center p-3 sm:p-4 rounded-xl bg-accent/5">
                        <div class="text-xl sm:text-3xl font-bold text-accent" x-data><span x-countup="{ start: 0, end: 15, duration: 1500 }">0</span>+</div>
                        <div class="text-xs sm:text-sm text-gray-500 mt-1">Tahun</div>
                    </div>
                </div>
            </div>
            <div class="relative" data-aos="fade-left" data-parallax-speed="0.15">
                <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-xl">
                    <img src="{{ asset('img/IMG_20260117_124702.webp') }}" alt="Toko Cahaya Plalar" class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-secondary/10 rounded-2xl -z-10"></div>
                <div class="absolute -top-4 -left-4 w-20 h-20 bg-primary/10 rounded-full -z-10"></div>
            </div>
        </div>
    </div>
</section>

{{-- Featured Products Section --}}
<section id="products-bg-container" class="py-12 lg:py-24 relative overflow-hidden"
    style="background: radial-gradient(ellipse 70% 60% at 20% 50%, rgba(6,182,212,0.25) 0%, transparent 60%),
                  radial-gradient(ellipse 70% 60% at 80% 50%, rgba(245,158,11,0.25) 0%, transparent 60%),
                  linear-gradient(180deg, #f0f9ff 0%, #fefce8 50%, #f0fdf4 100%);">
    {{-- Ambient glow orbs --}}
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <div class="absolute -top-20 right-1/4 w-80 h-80 rounded-full bg-primary/20 blur-3xl animate-float"></div>
        <div class="absolute -bottom-20 left-1/4 w-96 h-96 rounded-full bg-secondary/20 blur-3xl animate-float" style="animation-delay: -2.5s"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12" data-aos="fade-up">
            <span class="text-primary font-semibold text-sm tracking-wider uppercase">Produk Unggulan</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mt-2">Produk <span class="text-primary">Pilihan</span> Kami</h2>
            <p class="text-gray-500 mt-3">Berbagai produk berkualitas yang siap memenuhi kebutuhan sehari-hari Anda</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @forelse($featuredProducts as $product)
            <div class="group bg-white rounded-xl shadow-sm hover:shadow-lg border border-gray-100 overflow-hidden transition-all duration-300 hover:-translate-y-1" data-aos="fade-up" data-aos-delay="{{ $loop->index * 50 }}">
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
                        <a href="https://wa.me/6285293756658?text=Halo%20Cahaya%20Plalar%2C%20saya%20mau%20pesan%20{{ urlencode($product->nama_produk) }}%2C%20apakah%20ready%3F" target="_blank" class="w-9 h-9 rounded-lg bg-green-50 text-green-600 hover:bg-green-500 hover:text-white flex items-center justify-center transition-all duration-200" title="Pesan via WA">
                            <i class="fab fa-whatsapp text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
            @empty
            <div class="col-span-full text-center py-16">
                <i class="fas fa-box-open text-6xl text-gray-200 mb-4"></i>
                <p class="text-gray-400 text-lg">Belum ada produk tersedia</p>
            </div>
            @endforelse
        </div>

        <div class="text-center mt-10" data-aos="fade-up">
            <a href="{{ route('katalog') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-primary text-white font-semibold rounded-xl hover:bg-primary-dark transition-all duration-200 shadow-lg shadow-primary/20 hover:shadow-xl hover:-translate-y-0.5">
                Lihat Semua Produk
                <i class="fas fa-arrow-right text-sm"></i>
            </a>
        </div>
    </div>
</section>

{{-- Best Sellers Section --}}
<section class="py-12 lg:py-24 bg-gray-50 relative overflow-hidden">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-10 gap-4" data-aos="fade-up">
            <div>
                <span class="inline-flex items-center gap-1.5 px-3 py-1 rounded-full bg-red-100 text-red-600 text-xs font-bold uppercase tracking-wider mb-3">
                    <i class="fas fa-fire"></i> Sedang Hangat
                </span>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-800">Paling Banyak <span class="text-primary">Dibeli</span></h2>
                <p class="text-gray-500 mt-2">Produk favorit pilihan warga sekitar yang cepat habis!</p>
            </div>
            <a href="{{ route('katalog') }}" class="text-primary font-semibold hover:text-primary-dark inline-flex items-center gap-1 transition-colors">
                Lihat Semua <i class="fas fa-arrow-right text-xs"></i>
            </a>
        </div>

        <div x-data="{ isDown: false, startX: 0, scrollLeft: 0 }" class="relative group" data-aos="fade-up" data-aos-delay="100">
            <button @click="$refs.container.scrollBy({ left: -300, behavior: 'smooth' })"
                class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 z-10 w-12 h-12 rounded-full bg-white shadow-lg border border-gray-100 flex items-center justify-center text-gray-600 hover:text-primary hover:border-primary transition-all duration-300 opacity-0 group-hover:opacity-100 hidden md:flex">
                <i class="fas fa-chevron-left"></i>
            </button>
            <button @click="$refs.container.scrollBy({ left: 300, behavior: 'smooth' })"
                class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 z-10 w-12 h-12 rounded-full bg-white shadow-lg border border-gray-100 flex items-center justify-center text-gray-600 hover:text-primary hover:border-primary transition-all duration-300 opacity-0 group-hover:opacity-100 hidden md:flex">
                <i class="fas fa-chevron-right"></i>
            </button>

            <div x-ref="container"
                @mousedown="isDown = true; startX = $event.pageX - $refs.container.offsetLeft; scrollLeft = $refs.container.scrollLeft; $refs.container.style.cursor = 'grabbing'"
                @mousemove="if (!isDown) return; $event.preventDefault(); $refs.container.scrollLeft = scrollLeft - ($event.pageX - $refs.container.offsetLeft - startX)"
                @mouseup="isDown = false; $refs.container.style.cursor = ''"
                @mouseleave="isDown = false; $refs.container.style.cursor = ''"
                class="flex gap-6 overflow-x-auto pt-4 pb-6 px-4 cursor-grab select-none no-scrollbar">
                @forelse($products as $product)
                <div class="shrink-0 w-[260px] sm:w-[280px] lg:w-[300px] flex flex-col">
                    <div class="group bg-white rounded-xl shadow-sm hover:shadow-lg border border-gray-100 overflow-hidden transition-all duration-300 hover:-translate-y-1 h-full flex flex-col">
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
                                </div>
                            @else
                                <div class="text-center p-4">
                                    <i class="fas fa-box-open text-4xl text-gray-300"></i>
                                </div>
                            @endif
                            <div class="absolute top-3 right-3">
                                <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-red-500 text-white shadow-sm flex items-center gap-1">
                                    <i class="fas fa-star text-[10px] text-yellow-300"></i> Terlaris
                                </span>
                            </div>
                        </div>
                        <div class="p-4 flex flex-col flex-1">
                            @if($product->category)
                                <span class="text-xs text-primary font-medium">{{ $product->category->nama_kategori }}</span>
                            @endif
                            <h3 class="font-semibold text-gray-800 mt-1 group-hover:text-primary transition-colors duration-200">{{ $product->nama_produk }}</h3>
                            <div class="flex items-center justify-between mt-auto pt-4 border-t border-gray-100">
                                <span class="text-lg font-bold text-primary">Rp {{ number_format($product->harga, 0, ',', '.') }}</span>
                                <a href="https://wa.me/6285293756658?text=Halo%20Cahaya%20Plalar%2C%20saya%20mau%20pesan%20{{ urlencode($product->nama_produk) }}%2C%20apakah%20ready%3F" target="_blank" class="w-9 h-9 rounded-lg bg-green-50 text-green-600 hover:bg-green-500 hover:text-white flex items-center justify-center transition-all duration-200" title="Pesan via WA">
                                    <i class="fab fa-whatsapp text-lg"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="w-full text-center py-10">
                    <p class="text-gray-400">Belum ada produk tersedia</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</section>

{{-- Categories Section --}}
<section class="py-12 lg:py-24 bg-white relative overflow-hidden">
    {{-- Floating product bubbles --}}
    <div class="absolute top-10 left-10 w-20 h-20 rounded-full bg-white/90 backdrop-blur shadow-lg shadow-primary/10 border border-primary/20 flex items-center justify-center animate-float hidden lg:flex">
        <i class="fas fa-box text-2xl text-primary"></i>
    </div>
    <div class="absolute bottom-10 right-12 w-28 h-28 rounded-full bg-white/90 backdrop-blur shadow-lg shadow-secondary/10 border border-secondary/20 flex items-center justify-center animate-float hidden lg:flex" style="animation-delay: -2.5s;">
        <i class="fas fa-shopping-bag text-3xl text-secondary"></i>
    </div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12" data-aos="fade-up">
            <span class="text-primary font-semibold text-sm tracking-wider uppercase">Kategori</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mt-2">Kategori <span class="text-primary">Produk</span></h2>
            <p class="text-gray-500 mt-3">Jelajahi produk berdasarkan kategori yang tersedia</p>
        </div>

        @php
            $categoryIcons = [
                'Sembako' => 'fa-box',
                'Minuman' => 'fa-wine-bottle',
                'Makanan Ringan' => 'fa-cookie-bite',
                'Perlengkapan Mandi' => 'fa-soap',
                'Alat Rumah Tangga' => 'fa-tools',
                'Perlengkapan Bayi' => 'fa-baby',
                'Obat-obatan' => 'fa-tablets',
                'Bumbu Dapur' => 'fa-mortar-pestle',
            ];
        @endphp

        <div x-data="{ isDown: false, startX: 0, scrollLeft: 0 }" class="relative" data-aos="fade-up" data-aos-delay="100">
            <button @click="$refs.container.scrollBy({ left: -250, behavior: 'smooth' })"
                class="absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 z-10 w-10 h-10 rounded-full bg-white shadow-lg border border-gray-200 flex items-center justify-center text-gray-500 hover:text-primary hover:border-primary transition-all duration-200 hidden md:flex">
                <i class="fas fa-chevron-left text-sm"></i>
            </button>
            <button @click="$refs.container.scrollBy({ left: 250, behavior: 'smooth' })"
                class="absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 z-10 w-10 h-10 rounded-full bg-white shadow-lg border border-gray-200 flex items-center justify-center text-gray-500 hover:text-primary hover:border-primary transition-all duration-200 hidden md:flex">
                <i class="fas fa-chevron-right text-sm"></i>
            </button>

            <div x-ref="container"
                @mousedown="isDown = true; startX = $event.pageX - $refs.container.offsetLeft; scrollLeft = $refs.container.scrollLeft; $refs.container.style.cursor = 'grabbing'"
                @mousemove="if (!isDown) return; $event.preventDefault(); $refs.container.scrollLeft = scrollLeft - ($event.pageX - $refs.container.offsetLeft - startX)"
                @mouseup="isDown = false; $refs.container.style.cursor = ''"
                @mouseleave="isDown = false; $refs.container.style.cursor = ''"
                class="flex gap-4 overflow-x-auto pt-2 pb-4 px-4 cursor-grab select-none no-scrollbar">
                @forelse($categories as $category)
                <a href="{{ route('katalog', ['category' => $category->id]) }}" class="group min-w-[140px] p-6 rounded-xl bg-gray-50 hover:bg-primary hover:text-white border border-gray-100 hover:border-primary text-center transition-all duration-300 shrink-0">
                    <div class="w-14 h-14 mx-auto rounded-full bg-white shadow-sm group-hover:bg-white/20 flex items-center justify-center mb-3 transition-all duration-300">
                        <i class="fas {{ $categoryIcons[$category->nama_kategori] ?? 'fa-tag' }} text-xl text-primary group-hover:text-white transition-all duration-300"></i>
                    </div>
                    <h3 class="font-medium text-sm text-gray-700 group-hover:text-white transition-all duration-300">{{ $category->nama_kategori }}</h3>
                    <p class="text-xs text-gray-400 group-hover:text-white/70 mt-1">{{ $category->products_count }} Produk</p>
                </a>
                @empty
                <div class="col-span-full text-center py-12">
                    <i class="fas fa-folder-open text-6xl text-gray-200 mb-4"></i>
                    <p class="text-gray-400 text-lg">Belum ada kategori</p>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</section>

{{-- Testimonial Section --}}
<section class="py-12 lg:py-24 bg-primary/5 relative overflow-hidden">
    <div class="absolute -left-20 top-20 w-64 h-64 bg-primary/10 rounded-full blur-3xl"></div>
    <div class="absolute -right-20 bottom-20 w-64 h-64 bg-secondary/10 rounded-full blur-3xl"></div>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="text-center max-w-2xl mx-auto mb-16" data-aos="fade-up">
            <span class="text-primary font-semibold text-sm tracking-wider uppercase">Kata Mereka</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mt-2">Ulasan <span class="text-primary">Pelanggan</span></h2>
            <p class="text-gray-500 mt-3">Dipercaya oleh lebih dari 1000+ warga sekitar untuk memenuhi kebutuhan sehari-hari</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-6 lg:gap-8 pt-6">
            {{-- Testimonial 1 --}}
            <div class="group bg-white p-8 rounded-3xl shadow-lg shadow-gray-200/50 hover:shadow-2xl hover:shadow-primary/20 border border-gray-100 hover:border-primary/30 relative transition-all duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="0">
                <div class="absolute -top-6 right-8 w-12 h-12 bg-gradient-to-br from-primary to-primary-dark rounded-full flex items-center justify-center shadow-lg shadow-primary/30 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-quote-right text-white text-lg"></i>
                </div>
                
                <div class="flex items-center gap-1 text-amber-400 text-sm mb-6">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                
                <p class="text-gray-700 leading-relaxed font-medium mb-8">"Belanja di Cahaya Plalar paling lengkap di Kaliwuluh, harganya murah dan pelayanannya ramah banget!"</p>
                
                <div class="flex items-center gap-4 pt-6 border-t border-gray-100">
                    <div class="w-12 h-12 bg-gradient-to-br from-gray-100 to-gray-200 rounded-full flex items-center justify-center text-gray-600 font-bold text-lg ring-4 ring-white shadow-inner">S</div>
                    <div>
                        <h4 class="font-bold text-gray-900">Ibu Siti</h4>
                        <span class="text-xs text-primary font-medium">Warga Gedongrejo</span>
                    </div>
                </div>
            </div>
            
            {{-- Testimonial 2 --}}
            <div class="group bg-white p-8 rounded-3xl shadow-lg shadow-gray-200/50 hover:shadow-2xl hover:shadow-secondary/20 border border-gray-100 hover:border-secondary/30 relative transition-all duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute -top-6 right-8 w-12 h-12 bg-gradient-to-br from-secondary to-orange-500 rounded-full flex items-center justify-center shadow-lg shadow-secondary/30 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-quote-right text-white text-lg"></i>
                </div>
                
                <div class="flex items-center gap-1 text-amber-400 text-sm mb-6">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                </div>
                
                <p class="text-gray-700 leading-relaxed font-medium mb-8">"Sangat terbantu ada toko ini. Kalau ada kebutuhan mendadak tinggal WA, respons cepat. Mantap pokoknya!"</p>
                
                <div class="flex items-center gap-4 pt-6 border-t border-gray-100">
                    <div class="w-12 h-12 bg-gradient-to-br from-gray-100 to-gray-200 rounded-full flex items-center justify-center text-gray-600 font-bold text-lg ring-4 ring-white shadow-inner">B</div>
                    <div>
                        <h4 class="font-bold text-gray-900">Bapak Budi</h4>
                        <span class="text-xs text-secondary font-medium">Warga Plalar</span>
                    </div>
                </div>
            </div>

            {{-- Testimonial 3 --}}
            <div class="group bg-white p-8 rounded-3xl shadow-lg shadow-gray-200/50 hover:shadow-2xl hover:shadow-accent/20 border border-gray-100 hover:border-accent/30 relative transition-all duration-300 hover:-translate-y-2" data-aos="fade-up" data-aos-delay="200">
                <div class="absolute -top-6 right-8 w-12 h-12 bg-gradient-to-br from-accent to-blue-600 rounded-full flex items-center justify-center shadow-lg shadow-accent/30 group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-quote-right text-white text-lg"></i>
                </div>
                
                <div class="flex items-center gap-1 text-amber-400 text-sm mb-6">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star-half-alt"></i>
                </div>
                
                <p class="text-gray-700 leading-relaxed font-medium mb-8">"Barangnya selalu fresh, telur dan beras kualitasnya bagus. Tempatnya juga bersih dan gampang dicari."</p>
                
                <div class="flex items-center gap-4 pt-6 border-t border-gray-100">
                    <div class="w-12 h-12 bg-gradient-to-br from-gray-100 to-gray-200 rounded-full flex items-center justify-center text-gray-600 font-bold text-lg ring-4 ring-white shadow-inner">A</div>
                    <div>
                        <h4 class="font-bold text-gray-900">Mbak Ani</h4>
                        <span class="text-xs text-accent font-medium">Pelanggan Setia</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- Contact Section --}}
<section id="kontak" class="py-12 lg:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12" data-aos="fade-up">
            <span class="text-primary font-semibold text-sm tracking-wider uppercase">Hubungi Kami</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mt-2">Get In <span class="text-primary">Touch</span></h2>
            <p class="text-gray-500 mt-3">Punya pertanyaan atau ingin memesan? Hubungi kami melalui form di bawah ini</p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16">
            {{-- Contact Info --}}
            <div class="space-y-6" data-aos="fade-right">
                <div class="flex items-start gap-4 p-5 rounded-xl bg-white shadow-sm border border-gray-100">
                    <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center shrink-0">
                        <i class="fas fa-map-marker-alt text-xl text-primary"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Alamat</h4>
                        <p class="text-sm text-gray-500 mt-1">Gedongrejo RT02/RW14, Kaliwuluh, Kebakkramat, Karanganyar, Jawa Tengah</p>
                    </div>
                </div>
               
                <div class="flex items-start gap-4 p-5 rounded-xl bg-white shadow-sm border border-gray-100">
                    <div class="w-12 h-12 rounded-xl bg-accent/10 flex items-center justify-center shrink-0">
                        <i class="fab fa-whatsapp text-xl text-accent"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">WhatsApp</h4>
                        <a href="https://wa.me/6285293756658" class="text-sm text-primary hover:text-primary-dark mt-1 block" target="_blank">+62 852-9375-6658</a>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-5 rounded-xl bg-white shadow-sm border border-gray-100">
                    <div class="w-12 h-12 rounded-xl bg-purple-50 flex items-center justify-center shrink-0">
                        <i class="fas fa-clock text-xl text-purple-500"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Jam Operasional</h4>
                        <p class="text-sm text-gray-500 mt-1">Senin - Minggu: 07.00 - 20.00</p>
                    </div>
                </div>
            </div>

            {{-- Contact Form --}}
            <div class="bg-white rounded-2xl shadow-sm border border-gray-100 p-6 sm:p-8" data-aos="fade-left">
                <form>
                    @csrf
                    <div class="space-y-5">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1.5">Nama Lengkap</label>
                            <input type="text" id="name" name="name" placeholder="Masukkan nama Anda" required
                                class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all duration-200">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">Email</label>
                            <input type="email" id="email" name="email" placeholder="Masukkan email Anda" required
                                class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all duration-200">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1.5">Pesan</label>
                            <textarea id="message" name="message" rows="4" placeholder="Tulis pesan Anda..." required
                                class="w-full px-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all duration-200 resize-none"></textarea>
                        </div>
                        <button type="submit"
                            class="w-full py-3 bg-primary hover:bg-primary-dark text-white font-semibold rounded-xl transition-all duration-200 shadow-lg shadow-primary/20 hover:shadow-xl flex items-center justify-center gap-2">
                            <i class="fas fa-paper-plane text-sm"></i>
                            Kirim Pesan
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
