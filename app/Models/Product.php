<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nama_produk',
        'kategori_id',
        'harga',
        'stok',
        'gambar',
        'deskripsi'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'kategori_id');
    }
}
