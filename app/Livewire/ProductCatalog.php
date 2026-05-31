<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductCatalog extends Component
{
    use WithPagination;

    public $search = '';
    public $selectedCategory = '';

    protected $queryString = [
        'search' => ['except' => ''],
        'selectedCategory' => ['except' => ''],
    ];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingSelectedCategory()
    {
        $this->resetPage();
    }

    public function render()
    {
        $categories = Category::withCount('products')->get();

        $products = Product::with('category')
            ->when($this->search, fn($q) => $q->where('nama_produk', 'like', "%{$this->search}%"))
            ->when($this->selectedCategory, fn($q) => $q->where('kategori_id', $this->selectedCategory))
            ->latest()
            ->paginate(12);

        return view('livewire.product-catalog', compact('categories', 'products'));
    }
}
