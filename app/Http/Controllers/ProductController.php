<?php
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        abort_if(!$product->is_published, 404);

        $relatedProducts = Product::where('is_published', true)
            ->where('id', '!=', $product->id)
            ->inRandomOrder()
            ->limit(3)
            ->get();
        return view('products.show', [
            'product' => $product,
            'relatedProducts' => $relatedProducts
        ]);
    }

    public function indexByCategory(string $category)
    {
        $products = Product::where('category', $category)
            ->where('is_published', true)
            ->latest()
            ->get();

        return view('prodotti', [
            'products' => $products,
            'categoryName' => ucfirst($category)
        ]);
    }
}
