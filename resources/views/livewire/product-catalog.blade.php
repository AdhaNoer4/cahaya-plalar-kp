<div>
    {{-- Filter --}}
    <div class="flex flex-col sm:flex-row gap-4 mb-8">
        <div class="relative flex-1">
            <i class="fas fa-search absolute left-3.5 top-1/2 -translate-y-1/2 text-gray-400 text-sm"></i>
            <input type="text" wire:model.live.debounce.300ms="search" placeholder="Cari produk..."
                class="w-full pl-10 pr-4 py-2.5 rounded-xl border border-gray-200 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all duration-200">
        </div>
        <select wire:model.live="selectedCategory"
            class="px-4 py-2.5 rounded-xl border border-gray-200 bg-white text-sm focus:outline-none focus:ring-2 focus:ring-primary/30 focus:border-primary transition-all duration-200">
            <option value="">Semua Kategori</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->nama_kategori }} ({{ $category->products_count }})</option>
            @endforeach
        </select>
    </div>

    {{-- Products Grid --}}
    <div class="grid grid-cols-2 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-3 sm:gap-6">
        @forelse($products as $product)
        <div onclick="window.location='{{ route('product.show', $product) }}'" class="group bg-white rounded-xl shadow-sm hover:shadow-lg border border-gray-100 overflow-hidden transition-all duration-300 hover:-translate-y-1 cursor-pointer">
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
                    @if($product->stok > 0)
                        <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-accent/10 text-accent border border-accent/20">Tersedia</span>
                    @else
                        <span class="px-2.5 py-1 rounded-full text-xs font-medium bg-red-50 text-red-500 border border-red-200">Habis</span>
                    @endif
                </div>
            </div>
            <div class="p-2.5 sm:p-4">
                @if($product->category)
                    <span class="text-[10px] sm:text-xs text-primary font-medium">{{ $product->category->nama_kategori }}</span>
                @endif
                <h3 class="font-semibold text-gray-800 mt-1 group-hover:text-primary transition-colors duration-200 text-xs sm:text-base line-clamp-2">{{ $product->nama_produk }}</h3>
                <p class="text-xs sm:text-sm text-gray-500 mt-1 line-clamp-2 hidden sm:block">{{ $product->deskripsi ?? 'Tidak ada deskripsi' }}</p>
                <div class="flex items-center justify-between mt-2 sm:mt-3 pt-2 sm:pt-3 border-t border-gray-100">
                    <span class="text-sm sm:text-lg font-bold text-primary">Rp {{ number_format($product->harga, 0, ',', '.') }}</span>
                    <a href="https://wa.me/{{ $siteSettings->whatsapp }}?text=Halo%20Cahaya%20Plalar%2C%20saya%20mau%20pesan%20{{ urlencode($product->nama_produk) }}%2C%20apakah%20ready%3F" target="_blank" onclick="event.stopPropagation()" class="w-7 h-7 sm:w-9 sm:h-9 rounded-lg bg-green-50 text-green-600 hover:bg-green-500 hover:text-white flex items-center justify-center transition-all duration-200" title="Pesan via WA">
                        <i class="fab fa-whatsapp text-sm sm:text-lg"></i>
                    </a>
                </div>
            </div>
        </div>
        @empty
        <div class="col-span-full text-center py-16">
            <i class="fas fa-box-open text-6xl text-gray-200 mb-4"></i>
            <p class="text-gray-400 text-lg">Produk tidak ditemukan</p>
        </div>
        @endforelse
    </div>

    {{-- Pagination --}}
    <div class="mt-8">
        {{ $products->links() }}
    </div>
</div>
