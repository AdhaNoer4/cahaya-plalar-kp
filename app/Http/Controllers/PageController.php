<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
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
        return view('katalog');
    }

    public function tentang()
    {
        $galleries = Gallery::where('is_active', true)
            ->orderBy('sort_order')
            ->get();

        return view('tentang', compact('galleries'));
    }

    public function kontak()
    {
        return view('kontak');
    }
}
