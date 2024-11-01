<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class ProductController extends Controller
{
    public function showProductsByCategory($categoryName)
    {
        $category = Category::where('name', $categoryName)->firstOrFail();
    
        $products = $category->products;
    
        return view('products.index', ['category' => $category, 'products' => $products]);
    }
    

    public function show($categoryName, $productName)
    {
        $category = Category::where('name', $categoryName)->firstOrFail();

        $product = Product::where('title', $productName)
            ->where('category_id', $category->id)
            ->firstOrFail();

        return view('products.show', ['product' => $product]);
    }
}
