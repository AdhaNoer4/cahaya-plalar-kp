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
<section class="py-16 lg:py-24">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">
            {{-- Contact Form --}}
            <div data-aos="fade-right">
                <span class="text-primary font-semibold text-sm tracking-wider uppercase">Kirim Pesan</span>
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-800 mt-2 mb-8">Hubungi Kami <span class="text-primary">via WhatsApp</span></h2>

                <form id="contactForm" class="space-y-5">
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1.5">Nama Lengkap</label>
                        <input type="text" id="name" name="name" required
                            class="w-full px-4 py-3 rounded-xl border border-gray-200 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all duration-200"
                            placeholder="Masukkan nama Anda">
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
                     <button type="submit"
                            class="w-full py-3 bg-primary hover:bg-primary-dark text-white font-semibold rounded-xl transition-all duration-200 shadow-lg shadow-primary/20 hover:shadow-xl flex items-center justify-center gap-2">
                            <i class="fas fa-paper-plane text-sm"></i>
                            Kirim Pesan
                        </button>
                </form>
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
                        <p class="text-sm text-gray-500 mt-1">Gedongrejo RT02/RW14, Kaliwuluh, Kebakkramat, Karanganyar, Jawa Tengah 57762</p>
                    </div>
                </div>
                <div class="flex items-start gap-4 p-5 rounded-xl bg-gray-50 border border-gray-100">
                    <div class="w-12 h-12 rounded-xl bg-green-50 flex items-center justify-center shrink-0">
                        <i class="fab fa-whatsapp text-xl text-green-500"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">WhatsApp</h4>
                        <a href="https://wa.me/6285293756658" target="_blank" class="text-sm text-green-600 hover:text-green-700 mt-1 block">+62 852-9375-6658</a>
                    </div>
                </div>
                
                
                <div class="flex items-start gap-4 p-5 rounded-xl bg-gray-50 border border-gray-100">
                    <div class="w-12 h-12 rounded-xl bg-purple-50 flex items-center justify-center shrink-0">
                        <i class="fas fa-clock text-xl text-purple-500"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-gray-800">Jam Operasional</h4>
                        <p class="text-sm text-gray-500 mt-1">Senin - Sabtu: 07.00 - 21.00</p>
                        <p class="text-sm text-gray-500">Minggu: 08.00 - 17.00</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault();

    const name = document.getElementById('name').value.trim();
    const phone = document.getElementById('phone').value.trim();
    const message = document.getElementById('message').value.trim();
    const phoneInfo = phone ? `\n\nNo. Telepon: ${phone}` : '';

    const text = encodeURIComponent(
        `Halo Cahaya Plalar, ${message}${phoneInfo}\n\n- ${name}`
    );

    window.open(`https://wa.me/6285293756658?text=${text}`, '_blank');
});
</script>