<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function addProducts()
    {
        return view('products.add_products');
    }

    public function saveProducts()
    {
        request()->validate([
            'pdt_name' => 'required|min:3|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:png,jpg,gif,jpeg|max:2048'
    ]);
    $input=([
            'pdt_name' => request('pdt_name'),
            'price' => request('price'),
        ] );
    if(request()->hasFile('image'))
    {
        $extension = request('image')->extension();
        $fileName = 'product_pic'.time().'.'.$extension;
        request('image')->move(public_path('images/'),$fileName);
        $input['image']=$fileName;
    }
    $input['user_id'] = auth()->user()->user_id;
    Product::create($input);
    return redirect()->route('view.products')->with('message','Product Added Successfully');
    }

    public function editProducts($productId)
    {
        $product = Product::find($productId);
        return view('products.edit_products',compact('product'));

    }
    public function updateProducts()
    {
        request()->validate([
            'pdt_name' => 'required|min:3|string',
            'price' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:png,jpg,gif,jpeg|max:2048'
        ]);
        $productId = request('product_id');
        $product = Product::find($productId);
        $input=([
            'pdt_name' => request('pdt_name'),
            'price' => request('price'),
        ] );
    if(request()->hasFile('image'))
    {
        $extension = request('image')->extension();
        $fileName = 'product_pic'.time().'.'.$extension;
        request('image')->move(public_path('images/'),$fileName);
        $input['image']=$fileName;
    }
    $input['user_id'] = auth()->user()->user_id;
    $product->update($input);
        return redirect()->route('view.products')->with('message','Product Updated Successfully');
    }

    public function viewProducts()
    {
       $products = Product::where('user_id',auth()->user()->user_id)->get();
        return view('products.view_products',compact('products'));
    }
    public function deleteProducts($productId)
    {
        Product::destroy($productId);
        return redirect()->route('view.products')->with('message','Product Deleted Successfully');
    }
}
