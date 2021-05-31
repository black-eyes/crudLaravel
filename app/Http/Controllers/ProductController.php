<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $products = Product::orderby('id','desc')->paginate(10);
        //$products = Product::all();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
        echo "hello we are on create a new product";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([]);

        Product::create($request->all());

        return redirect()->route('Product.index')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     *  @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product,$id)
    {


        //exit("we ARE in the controller");
        $product = Product::find($id);
        //return view('Product.show');
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        return view('products.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product,$id)
    {
        $request->validate([]);

        $product = Product::find($id);
        //return view('Product.show');
        $product->update($request->all());


//        $request->session()->flash('success','product successfully updated');
        return view('products.show',compact('product'))
            ->with('success','product successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if($product->delete())
        {
            return redirect()->route('Product.index')
                ->with('success', 'product deleted successfully');
        }else
        {
            return redirect()->route('Product.index')
                ->with('error', 'the product is not deleted successfully');
        }




    }
}
