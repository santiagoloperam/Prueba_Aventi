<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class productsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function show(){}

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        //VALIDACIÓN 'slug', 'details', 'price', 'shipping_cost','description','category_id','ean','quantity','brand_id'
        $this->validate($request,[
            'name' => 'required',
            'slug' => 'required',
            'details' => 'required',
            'price' => 'required|numeric',
            'shipping_cost' => 'required|numeric',
            'description' => 'required',
            //'category_id' => 'required|numeric',
            'ean' => 'required|numeric',
            'quantity' => 'required|numeric',
            'image_path' => 'required',
            //'brand_id' => 'required|numeric'
        ]);

        $product = new Product;
        $product->name = $request->get('name');
        $product->slug = $request->get('slug');
        $product->details = $request->get('details');
        $product->price = $request->get('price');
        $product->shipping_cost = $request->get('shipping_cost');
        $product->description = $request->get('description');
        $product->ean = $request->get('ean');
        $product->quantity = $request->get('quantity');
        $product->category_id = 1;
        $product->brand_id = 1;
        $product->image_path = $request->get('image_path');
        $product->save();

        return redirect()->route('products.index')->with('flash','el producto ha sido creado!');

    }

    public function edit(Product $product)
    {     
        return view('products.edit', compact('product'));
    }

    public function update(Product $product,  Request $request)
    {
        //VALIDACIÓN
        $this->validate($request,[
            'name' => 'required',
            'slug' => 'required',
            'details' => 'required',
            'price' => 'required|numeric',
            'shipping_cost' => 'required|numeric',
            'description' => 'required',
            //'category_id' => 'required|numeric',
            'ean' => 'required|numeric',
            'quantity' => 'required|numeric',
            'image_path' => 'required',
            //'brand_id' => 'required|numeric''
        ]);

        $product->name = $request->get('name');
        $product->slug = $request->get('slug');
        $product->details = $request->get('details');
        $product->price = $request->get('price');
        $product->shipping_cost = $request->get('shipping_cost');
        $product->description = $request->get('description');
        $product->ean = $request->get('ean');
        $product->quantity = $request->get('quantity');
        //$product->category_id = 1;
        //$product->brand_id = 1;        
        $product->image_path = $request->get('image_path');
        $product->save();

        return redirect()->route('products.index')->with('flash','El producto ha sido actualizado!');

    }

    public function destroy(Product $product)
    {    
        $product->delete(); 
        return redirect()->route('products.index')->with('flash','El producto ha sido eliminado!');
    }
}
