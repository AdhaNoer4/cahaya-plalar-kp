<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $sembako = Category::where('nama_kategori', 'Sembako')->first();
        $minuman = Category::where('nama_kategori', 'Minuman')->first();
        $makananRingan = Category::where('nama_kategori', 'Makanan Ringan')->first();
        $perlengkapanMandi = Category::where('nama_kategori', 'Perlengkapan Mandi')->first();
        $alatRT = Category::where('nama_kategori', 'Alat Rumah Tangga')->first();
        $perlengkapanBayi = Category::where('nama_kategori', 'Perlengkapan Bayi')->first();
        $obat = Category::where('nama_kategori', 'Obat-obatan')->first();
        $bumbu = Category::where('nama_kategori', 'Bumbu Dapur')->first();

        $products = [
            // Sembako (4)
            ['nama_produk' => 'Beras Premium 5 Kg', 'kategori_id' => $sembako->id, 'harga' => 78000, 'stok' => 50, 'gambar' => null, 'deskripsi' => 'Beras premium kualitas terbaik dengan tekstur pulen dan wangi. Cocok untuk konsumsi sehari-hari keluarga. Beras bersih dari bebatuan dan benda asing.'],
            ['nama_produk' => 'Minyak Goreng Sania 2 Liter', 'kategori_id' => $sembako->id, 'harga' => 38000, 'stok' => 40, 'gambar' => null, 'deskripsi' => 'Minyak goreng sawit murni yang higienis dan kaya vitamin E. Cocok untuk menggoreng berbagai masakan dengan hasil yang renyah dan tidak berminyak berlebihan.'],
            ['nama_produk' => 'Gula Pasir Lokal 1 Kg', 'kategori_id' => $sembako->id, 'harga' => 16000, 'stok' => 60, 'gambar' => null, 'deskripsi' => 'Gula pasir putih berkualitas tinggi dengan rasa manis alami. Cocok untuk minuman, kue, dan kebutuhan dapur sehari-hari. Dikemas dalam kantong plastik higienis.'],
            ['nama_produk' => 'Telur Ayam Negeri 1 Kg', 'kategori_id' => $sembako->id, 'harga' => 28000, 'stok' => 30, 'gambar' => null, 'deskripsi' => 'Telur ayam negeri segar dengan kualitas terbaik. Kulit bersih dan cangkang kokoh. Kaya protein hewani yang baik untuk pertumbuhan dan kesehatan tubuh.'],

            // Minuman (4)
            ['nama_produk' => 'Teh Botol Sosro 500ml', 'kategori_id' => $minuman->id, 'harga' => 6500, 'stok' => 100, 'gambar' => null, 'deskripsi' => 'Minuman teh siap minum dalam kemasan botol. Terbuat dari daun teh pilihan dengan rasa manis yang pas. Cocok dinikmati dingin maupun suhu ruang.'],
            ['nama_produk' => 'Aqua Air Mineral 600ml', 'kategori_id' => $minuman->id, 'harga' => 3000, 'stok' => 200, 'gambar' => null, 'deskripsi' => 'Air mineral murni dari sumber pegunungan terpilih. Higienis dan aman dikonsumsi setiap hari. Kemasan botol praktis untuk dibawa bepergian.'],
            ['nama_produk' => 'Kopi Kapal Api 200gr', 'kategori_id' => $minuman->id, 'harga' => 25000, 'stok' => 35, 'gambar' => null, 'deskripsi' => 'Kopi bubuk dengan aroma khas dan rasa yang kuat. Cocok untuk menemani pagi hari atau santai sore. Biji kopi pilihan yang diroasting secara sempurna.'],
            ['nama_produk' => 'Susu UHT Full Cream 1 Liter', 'kategori_id' => $minuman->id, 'harga' => 18500, 'stok' => 25, 'gambar' => null, 'deskripsi' => 'Susu sapi segar yang diproses dengan teknologi UHT. Kaya kalsium dan vitamin D untuk menjaga kesehatan tulang. Dapat disimpan tanpa pendingin sebelum dibuka.'],

            // Makanan Ringan (4)
            ['nama_produk' => 'Taro Snack Net 110gr', 'kategori_id' => $makananRingan->id, 'harga' => 10500, 'stok' => 45, 'gambar' => null, 'deskripsi' => 'Camilan renyah berbahan dasar kentang dan sayuran laut. Tersedia dalam berbagai varian rasa yang gurih dan nikmat. Cocok untuk teman santai dan bekal.'],
            ['nama_produk' => 'Chitato Sapi Panggang 68gr', 'kategori_id' => $makananRingan->id, 'harga' => 11500, 'stok' => 55, 'gambar' => null, 'deskripsi' => 'Keripik kentang dengan cita rasa sapi panggang yang lezat. Tekstur renyah dan bumbu yang merata di setiap gigitan. Camilan favorit untuk segala usia.'],
            ['nama_produk' => 'Roti Tawar Serat 400gr', 'kategori_id' => $makananRingan->id, 'harga' => 16000, 'stok' => 20, 'gambar' => null, 'deskripsi' => 'Roti tawar dengan kandungan serat tinggi dari gandum utuh. Cocok untuk sarapan sehat bersama selai atau meses. Tekstur lembut dan tahan lama.'],
            ['nama_produk' => 'Oreo Original 137gr', 'kategori_id' => $makananRingan->id, 'harga' => 8000, 'stok' => 70, 'gambar' => null, 'deskripsi' => 'Biskuit coklat dengan krim vanila yang lembut. Nikmati dengan cara klasik atau celupkan ke dalam susu. Camilan manis yang digemari anak-anak hingga dewasa.'],

            // Perlengkapan Mandi (4)
            ['nama_produk' => 'Sabun Mandi Lifebuoy 90gr', 'kategori_id' => $perlengkapanMandi->id, 'harga' => 5500, 'stok' => 60, 'gambar' => null, 'deskripsi' => 'Sabun mandi batang dengan perlindungan aktif dari kuman dan bakteri. Mengandung moisturizer untuk menjaga kelembaban kulit. Wangi segar tahan lama.'],
            ['nama_produk' => 'Shampo Clear Anti Ketombe 170ml', 'kategori_id' => $perlengkapanMandi->id, 'harga' => 15000, 'stok' => 30, 'gambar' => null, 'deskripsi' => 'Shampo dengan Zinc Pyrithione yang efektif mengatasi ketombe. Membersihkan rambut hingga ke akar dan membuat rambut terasa ringan dan segar.'],
            ['nama_produk' => 'Pasta Gigi Pepsodent 120gr', 'kategori_id' => $perlengkapanMandi->id, 'harga' => 9000, 'stok' => 50, 'gambar' => null, 'deskripsi' => 'Pasta gigi dengan fluoride aktif yang melindungi gigi dari kerusakan. Membersihkan gigi secara maksimal dan menyegarkan napas sepanjang hari.'],
            ['nama_produk' => 'Sabun Cuci Tangan Dettol 250ml', 'kategori_id' => $perlengkapanMandi->id, 'harga' => 22000, 'stok' => 25, 'gambar' => null, 'deskripsi' => 'Sabun cuci tangan cair antiseptik yang membunuh 99,9% kuman. Memberikan perlindungan maksimal bagi seluruh keluarga. Wangi segar dan tidak membuat kulit kering.'],

            // Alat Rumah Tangga (4)
            ['nama_produk' => 'Sapu Lidi Plastik', 'kategori_id' => $alatRT->id, 'harga' => 12000, 'stok' => 15, 'gambar' => null, 'deskripsi' => 'Sapu lidi dari plastik berkualitas yang kuat dan tahan lama. Bulu sapu rapat sehingga membersihkan kotoran secara menyeluruh. Ringan dan mudah digunakan.'],
            ['nama_produk' => 'Ember Plastik 10 Liter', 'kategori_id' => $alatRT->id, 'harga' => 18000, 'stok' => 20, 'gambar' => null, 'deskripsi' => 'Ember plastik berkualitas tebal dengan kapasitas 10 liter. Cocok untuk menampung air, mencuci, atau keperluan rumah tangga lainnya. Tersedia pegangan yang kokoh.'],
            ['nama_produk' => 'Lap Pel Microfiber 50x50cm', 'kategori_id' => $alatRT->id, 'harga' => 15000, 'stok' => 35, 'gambar' => null, 'deskripsi' => 'Lap pel berbahan microfiber premium yang menyerap air dengan cepat. Dapat membersihkan debu dan kotoran tanpa meninggalkan serat. Cocok untuk lantai kayu maupun keramik.'],
            ['nama_produk' => 'Gelas Kaca Bening 6 Pcs', 'kategori_id' => $alatRT->id, 'harga' => 35000, 'stok' => 12, 'gambar' => null, 'deskripsi' => 'Set gelas kaca bening berkualitas tinggi. Desain sederhana dan elegan cocok untuk minuman sehari-hari maupun acara keluarga. Tebal dan tahan pecah.'],

            // Perlengkapan Bayi (3)
            ['nama_produk' => 'Popok Bayi Mamy Poko Ukuran M 30s', 'kategori_id' => $perlengkapanBayi->id, 'harga' => 45000, 'stok' => 20, 'gambar' => null, 'deskripsi' => 'Popok bayi sekali pakai dengan daya serap tinggi dan perlindungan anti bocor. Dilengkapi indikator basah yang memudahkan orang tua mengetahui kapan harus mengganti.'],
            ['nama_produk' => 'Tisu Basah Bayi 60 Lembar', 'kategori_id' => $perlengkapanBayi->id, 'harga' => 12000, 'stok' => 40, 'gambar' => null, 'deskripsi' => 'Tisu basah khusus bayi yang lembut dan aman untuk kulit sensitif. Mengandung aloe vera untuk menjaga kelembaban dan tidak menyebabkan iritasi.'],
            ['nama_produk' => 'Minyak Telon My Baby 100ml', 'kategori_id' => $perlengkapanBayi->id, 'harga' => 20000, 'stok' => 25, 'gambar' => null, 'deskripsi' => 'Minyak telon dengan formula triple action yang menghangatkan tubuh, melancarkan peredaran darah, dan mengusir nyamuk. Wangi lembut yang menenangkan bayi.'],

            // Obat-obatan (4)
            ['nama_produk' => 'Paracetamol 500mg 10 Tablet', 'kategori_id' => $obat->id, 'harga' => 8000, 'stok' => 50, 'gambar' => null, 'deskripsi' => 'Obat penurun panas dan pereda nyeri seperti sakit kepala, sakit gigi, dan nyeri otot. Dosis dewasa 500mg per tablet. Tersedia dalam kemasan strip 10 tablet.'],
            ['nama_produk' => 'Antasida Tablet 12s', 'kategori_id' => $obat->id, 'harga' => 6000, 'stok' => 35, 'gambar' => null, 'deskripsi' => 'Obat untuk mengatasi gangguan lambung seperti maag, mual, dan perut kembung. Bekerja cepat menetralkan asam lambung. Aman dikonsumsi sebelum atau sesudah makan.'],
            ['nama_produk' => 'Betadine Cair 10ml', 'kategori_id' => $obat->id, 'harga' => 11000, 'stok' => 40, 'gambar' => null, 'deskripsi' => 'Antiseptik untuk membersihkan luka terbuka, goresan, dan luka ringan. Membunuh kuman penyebab infeksi dan membantu proses penyembuhan. Kemasan botol tetes praktis.'],
            ['nama_produk' => 'Vitamin C IPI 100mg 10 Tablet', 'kategori_id' => $obat->id, 'harga' => 7000, 'stok' => 45, 'gambar' => null, 'deskripsi' => 'Vitamin C dosis 100mg yang membantu menjaga daya tahan tubuh. Antioksidan alami yang melindungi tubuh dari radikal bebas. Baik dikonsumsi sehari-hari.'],

            // Bumbu Dapur (4)
            ['nama_produk' => 'Bawang Merah Brebes 500gr', 'kategori_id' => $bumbu->id, 'harga' => 25000, 'stok' => 30, 'gambar' => null, 'deskripsi' => 'Bawang merah segar langsung dari Brebes. Ukuran sedang dengan aroma khas yang kuat. Bumbu dasar yang wajib ada di setiap masakan Indonesia.'],
            ['nama_produk' => 'Kecap Manis ABC 600ml', 'kategori_id' => $bumbu->id, 'harga' => 22000, 'stok' => 25, 'gambar' => null, 'deskripsi' => 'Kecap manis dengan rasa legit dan kental alami. Terbuat dari kedelai pilihan dan gula asli. Cocok sebagai bumbu masak dan pelengkap soto, bakso, atau siomay.'],
            ['nama_produk' => 'Royco Sapi 210gr', 'kategori_id' => $bumbu->id, 'harga' => 4000, 'stok' => 80, 'gambar' => null, 'deskripsi' => 'Penyedap rasa sapi instan yang membuat masakan lebih gurih dan nikmat. Praktis digunakan untuk sup, tumisan, dan berbagai masakan sehari-hari.'],
            ['nama_produk' => 'Kunyit Bubuk 100gr', 'kategori_id' => $bumbu->id, 'harga' => 8000, 'stok' => 30, 'gambar' => null, 'deskripsi' => 'Kunyit bubuk murni tanpa campuran pewarna buatan. Warna kuning alami dengan aroma khas. Cocok untuk masakan kari, opor, dan minuman kesehatan seperti jamu kunyit asam.'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }
}
