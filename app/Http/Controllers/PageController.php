<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Gallery;
use App\Models\Product;
use App\Models\BestSeller;
use App\Models\Testimonial;

class PageController extends Controller
{
    public function home()
    {
        $products = Product::with('category')->latest()->take(8)->get();
        $categories = Category::withCount('products')->get();
        $featuredProducts = Product::with('category')->inRandomOrder()->take(8)->get();

        $bestSellers = BestSeller::with(['product.category'])
            ->orderBy('sort_order')
            ->get()
            ->map(fn($bs) => $bs->product)
            ->filter();

        if ($bestSellers->isEmpty()) {
            $bestSellers = $products;
        }

        $testimonials = Testimonial::orderBy('sort_order')->get();

        return view('home', compact('products', 'categories', 'featuredProducts', 'bestSellers', 'testimonials'));
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

    public function productDetail(Product $product)
    {
        $relatedProducts = Product::with('category')
            ->where('kategori_id', $product->kategori_id)
            ->where('id', '!=', $product->id)
            ->inRandomOrder()
            ->take(4)
            ->get();

        return view('product-detail', compact('product', 'relatedProducts'));
    }
}
