<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;
use phpDocumentor\Reflection\Types\Object_;
use PhpParser\Node\Expr\Cast\Int_;
use Illuminate\Support\Facades\Validator;


class BackOfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::orderByDesc('ID')->get();
        // dd($products);
        return view('backoffice', ['products' => $products]);
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [

            'name' => 'required|unique:products|max 255',
            'price' => 'required|numeric|min:0',
            'weight' => 'required|numeric|min:0',
            'quantity' => 'required|numeric|min:0',
            'available' => 'required',
            'category_id' => 'required',

        ]);

        if ($validator->fails()) {
            return redirect('/backoffice/product/create')
                ->withErrors($validator);
        }
        else{
            $products=new Product;

            $products->name=$request->input('name');
            $products->price=$request->input('price');
            $products->weight=$request->input('weight');
            $products->quantity=$request->input('quantity');
            $products->available=$request->input('available');
            $products->category_id=$request->input('category_id');

            $products->save();


        }
        return redirect()->route('product.index');
    }


    /**
     * Display the specified resource.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
       // dd($product->category());
       return view('show',['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       // return view('update-product');
        if ($product = Product::find($id)) {
            return view('update-product', ['product' => $product]);
        } else {
            abort(404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Product $product)
    {
       // $product = Product::find($id);

      /*  $products->name = $request->name;
        $products->price = $request->price;
        $products->weight = $request->weight;
        $products->quantity = $request->quantity;
        $products->available = $request->available;
        $products->category_id = $request->category_id;*/

        $product->name=$request->input('name');
        $product->price=$request->input('price');
        $product->weight=$request->input('weight');
        $product->quantity=$request->input('quantity');
        $product->available=$request->input('available');
        $product->category_id=$request->input('category_id');

        $product->save();


        return redirect()->route('product.index',['product' => $product]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
        // delete
        $destroy = Product::find($product);
        $destroy->delete();

        // redirect
        return redirect()->route('product.index',['product' => $product]);
       // $product = Product::destroy($product);

      //  return view('backoffice', ['product' => $product]);
      //  return redirect()->route('product.index');
    }
}
