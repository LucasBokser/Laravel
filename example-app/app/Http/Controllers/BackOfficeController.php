<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class BackOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderBy('name')->get();
       // dd($products);
        return view('backoffice',['products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('add-product');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = Product::all();

        $products->validate([

            'name'=>'required|max:255',
            'price'=>'required|integer|gt:0',
            'weight'=>'required|integer|min:1',
            'quantity'=>'required|integer|min:0',
            'available'=>'required',
            'category-id'=>'required'
        ]);

        return redirect()->route('product.store',[$products]);
    }



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('product.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('product.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $products = Product::all();

        $products->validate([

            'name'=>'required|max:255',
            'price'=>'required|integer|gt:0',
            'weight'=>'required|integer|min:1',
            'quantity'=>'required|integer|min:0',
            'available'=>'required',
            'category-id'=>'required'
        ]);

        return redirect()->route('product.store',[$products]);
    }
}
