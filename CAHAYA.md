# RANCANGAN PROJECT  
# Website Profil Toko Cahaya Plalar  
## Media Informasi Harga dan Ketersediaan Barang

---

# 1. Deskripsi Project

Website ini merupakan sistem informasi berbasis web untuk Toko Cahaya Plalar yang bertujuan sebagai media informasi digital terkait:
- profil toko,
- informasi harga barang,
- ketersediaan stok barang,
- serta katalog produk kebutuhan sehari-hari.

Website dirancang menggunakan teknologi modern agar tampil:
- responsif,
- dinamis,
- interaktif,
- dan memiliki pengalaman pengguna (UI/UX) yang baik.

---

# 2. Tujuan Project

## Tujuan Utama
Membangun website profil toko yang dapat:
- memberikan informasi produk,
- menampilkan harga barang,
- menampilkan status stok,
- mempermudah pelanggan mendapatkan informasi,
- serta membantu digitalisasi toko kelontong.

---

# 3. Konsep Website

## Konsep UI/UX
Website akan menggunakan konsep:

- Modern
- Clean
- Minimalis
- Responsive
- Dynamic
- Interactive
- Mobile Friendly

---

# 4. Teknologi yang Digunakan

| Bagian | Teknologi |
|---|---|
| Backend Framework | Laravel 12 |
| Styling | TailwindCSS |
| Admin Panel | Filament |
| Dynamic Component | Livewire |
| Interactivity | Alpine.js |
| UI Component | Flowbite |
| Alert & Notification | SweetAlert2 |
| Animation | AOS Animation |
| Database | MySQL |
| Development Tools | Laragon, VS Code |

---

# 5. Alasan Pemilihan Teknologi

## Laravel 12
Digunakan karena:
- struktur MVC rapi,
- modern,
- scalable,
- aman,
- cocok untuk CRUD dan dashboard admin.

## TailwindCSS
Digunakan untuk:
- membangun UI modern,
- mempercepat styling,
- menjaga konsistensi desain,
- responsive di semua perangkat.

## Filament
Digunakan sebagai dashboard admin karena:
- CRUD cepat,
- tabel dan form otomatis,
- modern UI,
- search & filter bawaan,
- upload gambar mudah.

## Livewire
Digunakan agar website:
- lebih dinamis,
- realtime,
- tanpa reload halaman,
- tanpa JavaScript kompleks.

## Alpine.js
Digunakan untuk:
- dropdown,
- modal,
- mobile navbar,
- accordion,
- interaksi ringan lainnya.

## Flowbite
Digunakan untuk menyediakan:
- komponen UI modern,
- card,
- navbar,
- modal,
- button,
- form,
- carousel.

## SweetAlert2
Digunakan untuk:
- popup modern,
- konfirmasi hapus,
- notifikasi sukses,
- notifikasi error.

## AOS Animation
Digunakan untuk:
- animasi scroll,
- efek fade-up,
- transisi section,
- meningkatkan user experience.

---

# 6. Fitur Website

## Pengunjung
- Hero section modern
- Produk unggulan
- Live search produk
- Filter kategori
- Status stok barang
- Halaman kontak & lokasi
- Responsive mobile

## Admin
- Login admin
- Dashboard statistik
- CRUD produk
- CRUD kategori
- Upload gambar produk
- Update harga & stok

---

# 7. Struktur Database

## Tabel Produk

| Field | Type |
|---|---|
| id | bigint |
| nama_produk | varchar |
| kategori_id | bigint |
| harga | integer |
| stok | integer |
| gambar | varchar |
| deskripsi | text |

## Tabel Kategori

| Field | Type |
|---|---|
| id | bigint |
| nama_kategori | varchar |

## Tabel Admin

| Field | Type |
|---|---|
| id | bigint |
| name | varchar |
| email | varchar |
| password | varchar |

---

# 8. Arsitektur Sistem

```text
Pengunjung/Admin
        ↓
Frontend Website
(TailwindCSS + Livewire + Alpine.js)
        ↓
Laravel 12
        ↓
Filament Admin Panel
        ↓
MySQL Database
```

---

# 9. Roadmap Development

## Tahap 1
Setup Laravel 12 + TailwindCSS + Filament

## Tahap 2
Membuat database dan migration

## Tahap 3
Membuat dashboard admin

## Tahap 4
Membuat halaman frontend

## Tahap 5
Menambahkan fitur interaktif

## Tahap 6
Responsive testing & deployment

---

# 10. Kesimpulan

Website Profil Toko Cahaya Plalar dirancang menggunakan teknologi modern berbasis Laravel ecosystem untuk menghasilkan website yang:
- modern,
- interaktif,
- responsif,
- mudah dikembangkan,
- dan memiliki UI/UX yang baik.
