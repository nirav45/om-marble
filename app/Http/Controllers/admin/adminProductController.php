<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class adminProductController extends Controller
{

    public function create(Request $request)
    {
        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category = $request->category;
        $path= Storage::disk('public')->put('products/', $request->file('image'));
        $product->image = $path;
        $product->save();

        return redirect()->route('adminproducts');
    }

    public function createCategory(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->save();

        return redirect()->route('adminproducts');
    }

    public function deleteProduct(Request $request)
    {
        Product::destroy($request->productId);
        return true;
    }

    public function update(Request $request)
    {
        $product = Product::find($request->id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->category = $request->category;
        if ($request->hasFile('image')) {
            $path= Storage::disk('public')->put('products/', $request->file('image'));
            $product->image = $path;
        }
        $product->save();

        return redirect()->route('adminproduct', ['id' => $product->id]);
    }

    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        $contact = Contact::first();
        return view('admin/products', ['products' => $products, 'page' => 'products', 'contact' => $contact, 'categories' => $categories]);
    }

    public function getproducts(Request $request)
    {
        if (str_contains($request->category,'all')) {
            $products = Product::all();
        }else{
            $products = Product::all()->where('category','=',$request->category);
        }


        return response()->json([
            'success' => true,
            'html'=> view('admin/products-card-view',compact('products'))->render(),
            ]);
    }

    public function get(Request $request)
    {
        $product = Product::find($request->id);
        $contact = Contact::first();
        $products = Product::all()->where('category','=',$request->category);
        return view('admin/product-detail', ['products' => $products, 'product' => $product, 'page' => 'products', 'contact' => $contact]);
    }
}
