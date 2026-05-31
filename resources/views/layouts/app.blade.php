<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title', 'Cahaya Plalar - Toko Kebutuhan Sehari-hari')</title>

    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-800 overflow-x-hidden">

    {{-- Navbar --}}
    <nav x-data="{ mobileOpen: false, searchOpen: false }" class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-md shadow-sm border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16 lg:h-20">

                {{-- Logo --}}
                <a href="{{ route('home') }}" class="flex items-center gap-2 shrink-0">
                    {{-- <div class="w-9 h-9 rounded-lg bg-gradient-to-br from-primary to-primary-dark flex items-center justify-center text-white font-bold text-lg shadow-md">Cp</div> --}}
                    <span class="text-xl font-bold text-gray-800 max-sm:text-lg">Cahaya <span class="text-primary">Plalar</span></span>
                </a>

                {{-- Desktop Nav --}}
                <div class="hidden lg:flex items-center gap-1">
                    <a href="{{ route('home') }}" class="px-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-primary hover:bg-primary/5 transition-all duration-200 {{ request()->routeIs('home') ? 'text-primary bg-primary/5' : '' }}">Beranda</a>
                    <a href="{{ route('katalog') }}" class="px-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-primary hover:bg-primary/5 transition-all duration-200 {{ request()->routeIs('katalog') ? 'text-primary bg-primary/5' : '' }}">Katalog</a>
                    <a href="{{ route('tentang') }}" class="px-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-primary hover:bg-primary/5 transition-all duration-200 {{ request()->routeIs('tentang') ? 'text-primary bg-primary/5' : '' }}">Tentang</a>
                    <a href="{{ route('kontak') }}" class="px-4 py-2 rounded-lg text-sm font-medium text-gray-600 hover:text-primary hover:bg-primary/5 transition-all duration-200 {{ request()->routeIs('kontak') ? 'text-primary bg-primary/5' : '' }}">Kontak</a>
                </div>

                {{-- Search & Actions --}}
                <div class="flex items-center gap-2">
                    {{-- Search Desktop --}}
                    <div class="hidden lg:block relative">
                        <form action="{{ route('katalog') }}" method="GET">
                            <input type="text" name="search" placeholder="Cari produk..." value="{{ request('search') }}"
                                class="w-56 lg:w-64 pl-10 pr-4 py-2 rounded-full border border-gray-200 bg-gray-50 text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all duration-200">
                            <i class="fas fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                        </form>
                    </div>

                    {{-- Admin Login --}}
                    <a href="/admin/login" class="hidden lg:inline-flex items-center gap-1.5 px-3 py-2 rounded-lg text-sm font-medium text-gray-500 hover:text-primary hover:bg-primary/5 transition-all duration-200">
                        <i class="fas fa-shield-alt text-xs"></i>
                        Admin
                    </a>

                    {{-- Search Toggle Mobile --}}
                    <button @click="searchOpen = !searchOpen" class="lg:hidden p-2 rounded-lg text-gray-500 hover:text-primary hover:bg-primary/5 transition-all duration-200">
                        <i class="fas fa-search text-lg"></i>
                    </button>

                    {{-- Mobile Menu Toggle --}}
                    <button @click="mobileOpen = !mobileOpen" class="lg:hidden p-2 rounded-lg text-gray-500 hover:text-primary hover:bg-primary/5 transition-all duration-200">
                        <i class="fas text-xl" :class="mobileOpen ? 'fa-times' : 'fa-bars'"></i>
                    </button>
                </div>
            </div>

            {{-- Mobile Search --}}
            <div x-show="searchOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" class="lg:hidden pb-3" style="display: none;">
                <form action="{{ route('katalog') }}" method="GET">
                    <div class="relative">
                        <input type="text" name="search" placeholder="Cari produk..." value="{{ request('search') }}"
                            class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-gray-200 bg-gray-50 text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all duration-200">
                        <i class="fas fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
                    </div>
                </form>
            </div>

            {{-- Mobile Nav --}}
            <div x-show="mobileOpen" x-transition:enter="transition ease-out duration-200" x-transition:enter-start="opacity-0 -translate-y-2" x-transition:enter-end="opacity-100 translate-y-0" x-transition:leave="transition ease-in duration-150" x-transition:leave-start="opacity-100 translate-y-0" x-transition:leave-end="opacity-0 -translate-y-2" class="lg:hidden pb-4 border-t border-gray-100 pt-3" style="display: none;">
                <div class="flex flex-col gap-1">
                    <a href="{{ route('home') }}" class="px-4 py-2.5 rounded-lg text-sm font-medium text-gray-600 hover:text-primary hover:bg-primary/5 transition-all duration-200 {{ request()->routeIs('home') ? 'text-primary bg-primary/5' : '' }}">Beranda</a>
                    <a href="{{ route('katalog') }}" class="px-4 py-2.5 rounded-lg text-sm font-medium text-gray-600 hover:text-primary hover:bg-primary/5 transition-all duration-200 {{ request()->routeIs('katalog') ? 'text-primary bg-primary/5' : '' }}">Katalog</a>
                    <a href="{{ route('tentang') }}" class="px-4 py-2.5 rounded-lg text-sm font-medium text-gray-600 hover:text-primary hover:bg-primary/5 transition-all duration-200 {{ request()->routeIs('tentang') ? 'text-primary bg-primary/5' : '' }}">Tentang</a>
                    <a href="{{ route('kontak') }}" class="px-4 py-2.5 rounded-lg text-sm font-medium text-gray-600 hover:text-primary hover:bg-primary/5 transition-all duration-200 {{ request()->routeIs('kontak') ? 'text-primary bg-primary/5' : '' }}">Kontak</a>
                    <div class="border-t border-gray-100 my-2"></div>
                    <a href="/admin/login" class="px-4 py-2.5 rounded-lg text-sm font-medium text-gray-500 hover:text-primary hover:bg-primary/5 transition-all duration-200">
                        <i class="fas fa-shield-alt text-xs mr-2"></i>
                        Admin Dashboard
                    </a>
                </div>
            </div>
        </div>
    </nav>

    {{-- Main Content --}}
    <main>
        @yield('content')
    </main>

    {{-- Footer --}}
    <footer class="bg-gray-900 text-gray-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 lg:py-16">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 lg:gap-12">

                {{-- Tentang Kami --}}
                <div>
                    <div class="flex items-center gap-2 mb-4">
                        
                        <span class="text-lg font-bold text-white">Cahaya <span class="text-primary">Plalar</span></span>
                    </div>
                    <p class="text-sm leading-relaxed text-gray-400">
                        Toko kebutuhan sehari-hari terpercaya di Plalar. Menyediakan berbagai produk berkualitas untuk memenuhi kebutuhan rumah tangga Anda dengan harga terjangkau.
                    </p>
                    <div class="flex gap-3 mt-4">
                        <a href="#" class="w-9 h-9 rounded-full bg-gray-800 hover:bg-primary flex items-center justify-center text-gray-400 hover:text-white transition-all duration-200"><i class="fab fa-facebook-f text-sm"></i></a>
                        <a href="https://www.tiktok.com/@mochyfami?is_from_webapp=1&sender_device=pc" class="w-9 h-9 rounded-full bg-gray-800 hover:bg-primary flex items-center justify-center text-gray-400 hover:text-white transition-all duration-200"><i class="fab fa-tiktok text-sm"></i></a>
                        <a href="https://wa.me/6285293756658" class="w-9 h-9 rounded-full bg-gray-800 hover:bg-primary flex items-center justify-center text-gray-400 hover:text-white transition-all duration-200"><i class="fab fa-whatsapp text-sm"></i></a>
                    </div>
                </div>

                {{-- Navigasi --}}
                <div>
                    <h3 class="text-white font-semibold text-base mb-4">Navigasi</h3>
                    <ul class="space-y-2.5">
                        <li><a href="{{ route('home') }}" class="text-sm text-gray-400 hover:text-primary transition-all duration-200 flex items-center gap-2"><i class="fas fa-chevron-right text-xs"></i>Beranda</a></li>
                        <li><a href="{{ route('katalog') }}" class="text-sm text-gray-400 hover:text-primary transition-all duration-200 flex items-center gap-2"><i class="fas fa-chevron-right text-xs"></i>Katalog Produk</a></li>
                        <li><a href="{{ route('tentang') }}" class="text-sm text-gray-400 hover:text-primary transition-all duration-200 flex items-center gap-2"><i class="fas fa-chevron-right text-xs"></i>Tentang Kami</a></li>
                        <li><a href="{{ route('kontak') }}" class="text-sm text-gray-400 hover:text-primary transition-all duration-200 flex items-center gap-2"><i class="fas fa-chevron-right text-xs"></i>Hubungi Kami</a></li>
                    </ul>
                </div>

                {{-- Kontak --}}
                <div>
                    <h3 class="text-white font-semibold text-base mb-4">Kontak</h3>
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-map-marker-alt text-primary mt-1"></i>
                            <span class="text-sm text-gray-400">Gedongrejo RT02/RW14, Kaliwuluh, Kebakkramat, Karanganyar, Jawa Tengah</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <i class="fab fa-whatsapp text-primary"></i>
                            <a href="https://wa.me/6285293756658" class="text-sm text-gray-400 hover:text-primary transition-all duration-200" target="_blank">+62 852-9375-6658</a>
                        </li>
                        
                        <li class="flex items-center gap-3">
                            <i class="fas fa-clock text-primary"></i>
                            <span class="text-sm text-gray-400">Sen - Min: 07.00 - 20.00</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- Copyright --}}
        <div class="border-t border-gray-800">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
                <p class="text-center text-sm text-gray-500">&copy; {{ date('Y') }} Cahaya Plalar. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100,
        });
    </script>
    @livewireScripts
</body>
</html>
