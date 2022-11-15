<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function products()
    {
        $data = Product::latest()->paginate(5);

        return view('products', compact('data'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_image'         =>  'required|image|mimes:jpg,png,jpeg|max:2048',
            'product_name'          =>  'required|unique:products',
            'price'                 =>  'required'
        ]);

        $file_name = time() . '.' . request()->product_image->getClientOriginalExtension();

        request()->product_image->move(public_path('/frontend/img'), $file_name);

        $product = new Product;

        $product->product_image = $file_name;
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->price = $request->price;

        $product->save();

        return redirect()->route('resources.views.frontend.products')->with('success', 'Podarilo sa pridat produkt!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'product_image'         =>  'required|image|mimes:jpg,png,jpeg|max:2048',
            'product_name'          =>  'required|unique:products',
            'price'                 =>  'required'
        ]);

        $product_image = $request->hidden_product_image;

        if($request->product_image != '')
        {
            $product_image = time() . '.' . request()->product_image->getClientOriginalExtension();

            request()->product_image->move(public_path('/frontend/img'), $product_image);
        }

        $product = Product::find($request->hidden_id);

        $product->product_image = $product_image;
        $product->product_name = $request->product_name;
        $product->product_description = $request->product_description;
        $product->price = $request->price;

        $product->save();

        return redirect()->route('resources.views.frontend.products')->with('success', 'Produkt bol upraveny!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('resources.views.frontend.products')->with('success', 'Produkt bol vymazany!');
    }
}
