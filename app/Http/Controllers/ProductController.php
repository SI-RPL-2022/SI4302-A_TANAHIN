<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $product = Product::paginate(6);
        return view('home', compact('product'));
    }

    public function ecommerce_filter($cocok)
    {
        $products = Product::all();
        $product = $products->intersect(Product::whereIn('cocok', [$cocok])->get());
        return view('customer.e-commerce.produk2', compact('product', 'cocok'));
    }


    public function ecommerce()
    {
        $product = Product::paginate(6);
        return view('customer.e-commerce.produk', compact('product'));
    }

    public function ecommerce_detail($id)
    {
        $produk = Product::find($id);
        return view('customer.e-commerce.detail', compact('produk'));
    }
}
