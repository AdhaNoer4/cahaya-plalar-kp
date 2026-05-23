<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class PageController extends Controller
{
    public function home()
    {
        $products = Product::with('category')->latest()->take(8)->get();
        $categories = Category::withCount('products')->get();
        $featuredProducts = Product::with('category')->inRandomOrder()->take(8)->get();

        return view('home', compact('products', 'categories', 'featuredProducts'));
    }

    public function katalog()
    {
        $categories = Category::all();
        $query = Product::with('category');

        if (request('search')) {
            $query->where('nama_produk', 'like', '%' . request('search') . '%');
        }

        if (request('category')) {
            $query->where('kategori_id', request('category'));
        }

        $products = $query->latest()->paginate(12);

        return view('katalog', compact('products', 'categories'));
    }

    public function tentang()
    {
        return view('tentang');
    }
}
