@extends('layouts.app')

@section('title', 'Kontak Kami - Cahaya Plalar')

@section('content')
{{-- Page Header --}}
<section class="relative bg-gradient-to-br from-primary via-primary-dark to-cyan-700 pt-24 pb-12 lg:pt-28 lg:pb-16">
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-20 -right-20 w-60 h-60 rounded-full bg-white/5 blur-3xl"></div>
        <div class="absolute -bottom-20 -left-20 w-72 h-72 rounded-full bg-white/5 blur-3xl"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 text-white/90 text-sm font-medium mb-6 backdrop-blur-sm border border-white/10" data-aos="fade-up">
                <i class="fas fa-headset text-xs"></i>
                Hubungi Kami
            </div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-white" data-aos="fade-up" data-aos-delay="100">
                Ada yang bisa <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-300 to-amber-400">kami bantu?</span>
            </h1>
            <p class="text-white/70 mt-3 max-w-xl mx-auto" data-aos="fade-up" data-aos-delay="200">
                Silakan hubungi kami melalui form di bawah atau langsung melalui WhatsApp
            </p>
        </div>
    </div>
</section>

{{-- Contact Section --}}
<section class="py-12 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
            {{-- Contact Form --}}
            <div data-aos="fade-right">
                <span class="text-primary font-semibold text-sm tracking-wider uppercase">Kirim Pesan</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mt-2 mb-8">Hubungi Kami <span class="text-primary">via WhatsApp</span></h2>

                <form action="{{ route('contact.send') }}" method="POST" class="space-y-5">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1.5">Nama Lengkap</label>
                        <input type="text" id="name" name="name" required
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all duration-200"
                            placeholder="Masukkan nama Anda">
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1.5">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all duration-200"
                            placeholder="Masukkan email (opsional)">
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1.5">Nomor Telepon</label>
                        <input type="tel" id="phone" name="phone"
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all duration-200"
                            placeholder="Masukkan nomor telepon (opsional)">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1.5">Pesan</label>
                        <textarea id="message" name="message" rows="5" required
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all duration-200 resize-none"
                            placeholder="Tulis pesan Anda..."></textarea>
                    </div>
                    <div class="flex flex-col sm:flex-row gap-3">
                        <button type="submit"
                            class="flex-1 py-3 bg-primary hover:bg-primary-dark text-white font-semibold rounded-xl transition-all duration-200 shadow-lg shadow-primary/20 hover:shadow-xl flex items-center justify-center gap-2">
                            <i class="fas fa-paper-plane text-sm"></i>
                            Kirim via Email
                        </button>
                        <a href="https://wa.me/{{ $siteSettings->whatsapp }}" target="_blank"
                            class="py-3 bg-green-500 hover:bg-green-600 text-white font-semibold rounded-xl transition-all duration-200 shadow-lg shadow-green-500/25 hover:shadow-xl flex items-center justify-center gap-2 px-6">
                            <i class="fab fa-whatsapp text-sm"></i>
                            WhatsApp
                        </a>
                    </div>
                </form>
                @if(session('success'))
                    <script>document.addEventListener('DOMContentLoaded', function() { Swal.fire({ icon: 'success', title: 'Berhasil!', text: @js(session('success')), confirmButtonColor: '#b45309' }); });</script>
                @endif
            </div>

            {{-- Contact Info --}}
            <div class="space-y-6" data-aos="fade-left">
                <span class="text-primary font-semibold text-sm tracking-wider uppercase">Informasi Kontak</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mt-2 mb-8">Temukan <span class="text-primary">Kami</span></h2>

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
                    <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center shrink-0">
                        <i class="fab fa-whatsapp text-xl text-green-500"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">WhatsApp</h4>
                        <a href="https://wa.me/{{ $siteSettings->whatsapp }}" target="_blank" class="text-sm text-green-600 hover:text-green-700 mt-1 block">{{ $siteSettings->whatsapp_formatted }}</a>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-5 rounded-xl bg-gray-50 border border-gray-100">
                    <div class="w-12 h-12 rounded-xl bg-blue-50 flex items-center justify-center shrink-0">
                        <i class="fas fa-envelope text-xl text-blue-500"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">E-mail</h4>
                        <a href="mailto:{{ $siteSettings->email }}" class="text-sm text-blue-600 hover:text-blue-700 mt-1 block">{{ $siteSettings->email }}</a>
                    </div>
                </div>

                
                
                <div class="flex items-start gap-4 p-5 rounded-xl bg-gray-50 border border-gray-100">
                    <div class="w-12 h-12 rounded-xl bg-purple-50 flex items-center justify-center shrink-0">
                        <i class="fas fa-clock text-xl text-purple-500"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Jam Operasional</h4>
                        <p class="text-sm text-gray-500 mt-1">{{ $siteSettings->jam_operasional_weekday }}</p>
                        <p class="text-sm text-gray-500">{{ $siteSettings->jam_operasional_weekend }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- FAQ Section --}}
<section class="py-16 lg:py-24 bg-gray-50 border-t border-gray-100">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-16" data-aos="fade-up">
            <span class="text-primary font-semibold text-sm tracking-wider uppercase">Pertanyaan Umum</span>
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mt-2">Pertanyaan yang <span class="text-primary">Sering Diajukan</span></h2>
            <p class="text-gray-500 mt-3">Beberapa informasi penting mengenai layanan dan belanja di Cahaya Plalar</p>
        </div>

        <div class="space-y-4" x-data="{ active: null }">
            {{-- FAQ Item 1 --}}
            <div class="bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300" data-aos="fade-up" data-aos-delay="100">
                <button @click="active = (active === 1 ? null : 1)" 
                    class="w-full flex items-center justify-between p-5 sm:p-6 text-left font-semibold text-gray-800 hover:text-primary transition-colors focus:outline-none cursor-pointer">
                    <span class="pr-4">Apakah Cahaya Plalar menyediakan layanan pengiriman (delivery)?</span>
                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 shrink-0" :class="active === 1 ? 'rotate-180 text-primary' : ''"></i>
                </button>
                <div x-show="active === 1" 
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-2"
                    class="border-t border-gray-50 bg-gray-50/50 p-5 sm:p-6 text-sm text-gray-600 leading-relaxed">
                    Ya, kami menyediakan layanan pesan antar (delivery) untuk area sekitar Plalar dan sekitarnya. Anda dapat menghubungi kami via WhatsApp untuk menanyakan ketersediaan kurir, minimal pembelanjaan, dan ongkos kirim ke lokasi Anda.
                </div>
            </div>

            {{-- FAQ Item 2 --}}
            <div class="bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300" data-aos="fade-up" data-aos-delay="150">
                <button @click="active = (active === 2 ? null : 2)" 
                    class="w-full flex items-center justify-between p-5 sm:p-6 text-left font-semibold text-gray-800 hover:text-primary transition-colors focus:outline-none cursor-pointer">
                    <span class="pr-4">Bagaimana cara melakukan pemesanan secara online?</span>
                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 shrink-0" :class="active === 2 ? 'rotate-180 text-primary' : ''"></i>
                </button>
                <div x-show="active === 2" 
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-2"
                    class="border-t border-gray-50 bg-gray-50/50 p-5 sm:p-6 text-sm text-gray-600 leading-relaxed">
                    Sangat mudah! Anda cukup menjelajahi katalog produk kami di website ini, pilih produk yang Anda inginkan, klik tombol pemesanan WhatsApp, dan sistem kami akan langsung menyusun pesan berisi daftar belanjaan Anda untuk dikirimkan kepada kami.
                </div>
            </div>

            {{-- FAQ Item 3 --}}
            <div class="bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300" data-aos="fade-up" data-aos-delay="200">
                <button @click="active = (active === 3 ? null : 3)" 
                    class="w-full flex items-center justify-between p-5 sm:p-6 text-left font-semibold text-gray-800 hover:text-primary transition-colors focus:outline-none cursor-pointer">
                    <span class="pr-4">Apakah barang yang dijual di Cahaya Plalar dijamin kualitasnya?</span>
                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 shrink-0" :class="active === 3 ? 'rotate-180 text-primary' : ''"></i>
                </button>
                <div x-show="active === 3" 
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-2"
                    class="border-t border-gray-50 bg-gray-50/50 p-5 sm:p-6 text-sm text-gray-600 leading-relaxed">
                    Tentu saja. Kami selalu menjaga kesegaran produk kebutuhan pokok, sayuran, buah, serta memastikan tanggal kedaluwarsa produk kemasan dalam batas aman demi kesehatan dan kepuasan pelanggan kami.
                </div>
            </div>

            {{-- FAQ Item 4 --}}
            <div class="bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300" data-aos="fade-up" data-aos-delay="250">
                <button @click="active = (active === 4 ? null : 4)" 
                    class="w-full flex items-center justify-between p-5 sm:p-6 text-left font-semibold text-gray-800 hover:text-primary transition-colors focus:outline-none cursor-pointer">
                    <span class="pr-4">Metode pembayaran apa saja yang diterima?</span>
                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 shrink-0" :class="active === 4 ? 'rotate-180 text-primary' : ''"></i>
                </button>
                <div x-show="active === 4" 
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-2"
                    class="border-t border-gray-50 bg-gray-50/50 p-5 sm:p-6 text-sm text-gray-600 leading-relaxed">
                    Kami mendukung metode pembayaran tunai (Cash on Delivery / COD), transfer bank, serta pembayaran digital via e-wallet (QRIS) untuk mempermudah transaksi belanja Anda secara contactless.
                </div>
            </div>

            {{-- FAQ Item 5 --}}
            <div class="bg-white rounded-2xl border border-gray-100 overflow-hidden shadow-sm hover:shadow-md transition-all duration-300" data-aos="fade-up" data-aos-delay="300">
                <button @click="active = (active === 5 ? null : 5)" 
                    class="w-full flex items-center justify-between p-5 sm:p-6 text-left font-semibold text-gray-800 hover:text-primary transition-colors focus:outline-none cursor-pointer">
                    <span class="pr-4">Apakah jam operasional di hari libur tetap sama?</span>
                    <i class="fas fa-chevron-down text-xs transition-transform duration-300 shrink-0" :class="active === 5 ? 'rotate-180 text-primary' : ''"></i>
                </button>
                <div x-show="active === 5" 
                    x-transition:enter="transition ease-out duration-200"
                    x-transition:enter-start="opacity-0 -translate-y-2"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-2"
                    class="border-t border-gray-50 bg-gray-50/50 p-5 sm:p-6 text-sm text-gray-600 leading-relaxed">
                    Kami beroperasi setiap hari dengan rincian jam operasional yang tertera pada bagian "Jam Operasional". Jika ada perubahan waktu buka di hari raya besar keagamaan atau libur khusus, kami akan mengumumkannya terlebih dahulu.
                </div>
            </div>
        </div>
    </div>
</section>
@endsection