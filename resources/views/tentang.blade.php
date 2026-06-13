@extends('layouts.app')

@section('title', 'Tentang Kami - Cahaya Plalar')

@section('content')
{{-- Page Header --}}
<section id="three-bg-container" class="relative overflow-hidden min-h-[400px] flex items-center">
    <div class="absolute inset-0">
        <img src="{{ asset('img/IMG_20260117_124756.webp') }}" alt="Toko Cahaya Plalar" class="w-full h-full object-cover">
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
                Tentang Kami
            </div>
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-white leading-tight mb-6" data-aos="fade-up" data-aos-delay="100" data-parallax-speed="0.06">
                Kenali Lebih Dekat <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 via-amber-400 to-yellow-300 animate-gradient">Cahaya Plalar</span>
            </h1>
            <p class="text-lg sm:text-xl text-white/80 max-w-xl" data-aos="fade-up" data-aos-delay="200" data-parallax-speed="0.04">
                Toko kebutuhan sehari-hari terpercaya yang siap melayani Anda.
            </p>
        </div>

    </div>
</section>

{{-- About Content --}}
<section class="py-12 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16 items-center">
            <div data-aos="fade-right">
                <span class="text-primary font-semibold text-sm tracking-wider uppercase">Tentang Kami</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mt-2 mb-6">Cerita <span class="text-primary">Kami</span></h2>
                <div class="space-y-4 text-gray-600 leading-relaxed">
                    <p>Cahaya Plalar adalah toko kebutuhan sehari-hari yang berlokasi di Gedongrejo, Kaliwuluh, Kebakkramat, Karanganyar. Kami berkomitmen untuk menyediakan produk-produk berkualitas dengan harga yang terjangkau bagi masyarakat sekitar.</p>
                    <p>Kami menyediakan berbagai macam kebutuhan pokok, sembako, minuman, makanan ringan, perlengkapan mandi, alat rumah tangga, perlengkapan bayi, obat-obatan, dan bumbu dapur. Semua produk kami pilih dengan teliti untuk memastikan kualitas terbaik bagi pelanggan.</p>
                    <p>Kepercayaan pelanggan adalah prioritas utama kami. Kami selalu berusaha memberikan pelayanan yang ramah, harga yang bersaing, dan produk yang berkualitas. Kunjungi toko kami dan rasikan pengalaman berbelanja yang menyenangkan.</p>
                </div>
            </div>
            <div class="relative overflow-hidden p-4" data-aos="fade-left" data-parallax-speed="0.15">
                <div class="aspect-[4/3] rounded-2xl overflow-hidden shadow-xl">
                    <img src="{{ asset('img/IMG_20260117_124640.webp') }}" alt="Suasana Toko Cahaya Plalar" class="w-full h-full object-cover">
                </div>
                <div class="absolute -bottom-0 -left-0 w-24 h-24 bg-secondary/10 rounded-2xl -z-10"></div>
                <div class="absolute -top-0 -right-0 w-20 h-20 bg-primary/10 rounded-full -z-10"></div>
            </div>
        </div>
    </div>
</section>

{{-- Store Photos --}}
<section class="py-12 lg:py-24 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12" data-aos="fade-up">
            <span class="text-primary font-semibold text-sm tracking-wider uppercase">Galeri</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mt-2">Foto <span class="text-primary">Toko</span></h2>
            <p class="text-gray-500 mt-3">Suasana toko Cahaya Plalar</p>
        </div>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($galleries as $gallery)
            <div class="group rounded-2xl overflow-hidden shadow-lg bg-white" data-aos="fade-up" data-aos-delay="{{ $loop->index * 80 }}">
                <div class="aspect-[4/3] overflow-hidden">
                    <img src="{{ asset('storage/' . $gallery->image) }}" alt="{{ $gallery->title }}"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                </div>
                @if($gallery->description)
                <div class="p-4">
                    <p class="text-sm text-gray-600">{{ $gallery->description }}</p>
                </div>
                @endif
            </div>
            @empty
            <div class="col-span-full text-center py-16">
                <i class="fas fa-image text-6xl text-gray-200 mb-4"></i>
                <p class="text-gray-400">Belum ada galeri foto</p>
            </div>
            @endforelse
        </div>
    </div>
</section>

{{-- Location / Google Map --}}
<section class="py-12 lg:py-24 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-12" data-aos="fade-up">
            <span class="text-primary font-semibold text-sm tracking-wider uppercase">Lokasi</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mt-2">Temukan <span class="text-primary">Kami</span></h2>
            <p class="text-gray-500 mt-3">Kunjungi toko kami di lokasi berikut</p>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10 lg:gap-16">
            <div class="space-y-6" data-aos="fade-right">
                <div class="flex items-start gap-4 p-5 rounded-xl bg-gray-50 border border-gray-100">
                    <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center shrink-0">
                        <i class="fas fa-map-marker-alt text-xl text-primary"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Alamat Lengkap</h4>
                        <p class="text-sm text-gray-500 mt-1">{{ $siteSettings->address }}</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-5 rounded-xl bg-gray-50 border border-gray-100">
                    <div class="w-12 h-12 rounded-xl bg-secondary/10 flex items-center justify-center shrink-0">
                        <i class="fab fa-whatsapp text-xl text-secondary"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Whatsapp</h4>
                        <a href="https://wa.me/{{ $siteSettings->whatsapp }}" target="_blank" class="text-sm text-primary hover:text-primary-dark mt-1 block">{{ $siteSettings->whatsapp_formatted }}</a>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-5 rounded-xl bg-gray-50 border border-gray-100">
                    <div class="w-12 h-12 rounded-xl bg-accent/10 flex items-center justify-center shrink-0">
                        <i class="fas fa-envelope text-xl text-accent"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Email</h4>
                        <a href="mailto:tokocahayaplalar@gmail.com" class="text-sm text-primary hover:text-primary-dark mt-1 block">tokocahayaplalar@gmail.com</a>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-5 rounded-xl bg-gray-50 border border-gray-100">
                    <div class="w-12 h-12 rounded-xl bg-purple-50 flex items-center justify-center shrink-0">
                        <i class="fas fa-clock text-xl text-purple-500"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Jam Operasional</h4>
                        <p class="text-sm text-gray-500 mt-1">Senin - Minggu: 07.00 - 20.00</p>
                        
                    </div>
                </div>
            </div>
            <div class="rounded-2xl overflow-hidden shadow-lg border border-gray-100" data-aos="fade-left">
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2797.0319696781626!2d110.94914047361927!3d-7.509271809585446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a1a32d6ecb01d%3A0xbf7e4f284b3f314a!2sTk%20Cahaya%20Plalar!5e0!3m2!1sid!2sid!4v1779519286719!5m2!1sid!2sid" class="w-full h-[300px] sm:h-[400px] lg:h-[450px]" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</section>
@endsection
