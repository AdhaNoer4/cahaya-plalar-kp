<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Create Admin User
        if (! User::where('email', 'admin@cahayaplalar.com')->exists()) {
            User::create([
                'name' => 'Admin Cahaya Plalar',
                'email' => 'admin@cahayaplalar.com',
                'password' => Hash::make('password'),
            ]);
        }

        // 2. Seed categories and products
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
        ]);

        // 3. Seed default testimonials
        if (\App\Models\Testimonial::count() === 0) {
            \App\Models\Testimonial::create([
                'name' => 'Ibu Siti',
                'role' => 'Warga Gedongrejo',
                'content' => 'Belanja di Cahaya Plalar paling lengkap di Kaliwuluh, harganya murah dan pelayanannya ramah banget!',
                'stars' => 5.0,
                'sort_order' => 1,
            ]);
            \App\Models\Testimonial::create([
                'name' => 'Bapak Budi',
                'role' => 'Warga Plalar',
                'content' => 'Sangat terbantu ada toko ini. Kalau ada kebutuhan mendadak tinggal WA, respons cepat. Mantap pokoknya!',
                'stars' => 5.0,
                'sort_order' => 2,
            ]);
            \App\Models\Testimonial::create([
                'name' => 'Mbak Ani',
                'role' => 'Pelanggan Setia',
                'content' => 'Barangnya selalu fresh, telur dan beras kualitasnya bagus. Tempatnya juga bersih dan gampang dicari.',
                'stars' => 4.5,
                'sort_order' => 3,
            ]);
        }

        // 4. Seed default settings
        if (\App\Models\Setting::count() === 0) {
            \App\Models\Setting::create([
                'whatsapp' => '6285293756658',
                'whatsapp_formatted' => '+62 852-9375-6658',
                'address' => 'Gedongrejo RT02/RW14, Kaliwuluh, Kebakkramat, Karanganyar, Jawa Tengah 57762',
                'jam_operasional_weekday' => 'Senin - Sabtu: 07.00 - 21.00',
                'jam_operasional_weekend' => 'Minggu: 08.00 - 17.00',
            ]);
        }

        // Note: Run `php artisan storage:link` to create the storage symlink
        // if product images are stored in storage/app/public/products.
    }
}
