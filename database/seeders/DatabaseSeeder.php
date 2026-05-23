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

        // Note: Run `php artisan storage:link` to create the storage symlink
        // if product images are stored in storage/app/public/products.
    }
}
