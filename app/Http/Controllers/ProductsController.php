<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;


class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('add-product');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'description'=>'required',
        ]);
        $image = $request->file('image');
        Products::create([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);

        Alert::success('','Product Saved Succesfully');

        return Redirect(route('products-view'));
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $products = Products::all();

        return view('products-view', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $product = Products::find($id);
        return view('edit-product', ['product' => $product]);
        

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        $product = Products::find($request->id);

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'description' => $request->description,
        ]);
        Alert::success('','Product Updated Succesfully');

        return Redirect(route('products-view'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Products::find($id);
        $product->delete();
        Alert::success('','Product Deleted Succesfully');
        return redirect(route('products-view'));

    }
}