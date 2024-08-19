<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::orderBy('ordering')->get();
        return view('admin.products.index', compact('products'));
    }

    public function publicIndex()
    {
        $products = Product::orderBy('ordering')->get();
        return view('welcome', compact('products'));
    }


    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title_ru' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'title_tm' => 'required|string|max:255',
            'description_ru' => 'required',
            'description_en' => 'required',
            'description_tm' => 'required',
            'img' => 'nullable|string',
            'ordering' => 'required|integer',
        ]);

        $product = new Product($request->all());
        $product->save();

        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        return view('admin.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title_ru' => 'required|string|max:255',
            'title_en' => 'required|string|max:255',
            'title_tm' => 'required|string|max:255',
            'description_ru' => 'required',
            'description_en' => 'required',
            'description_tm' => 'required',
            'img' => 'nullable|string',
            'ordering' => 'required|integer',
        ]);

        $product->update($request->all());

        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Product deleted successfully.');
    }
}
