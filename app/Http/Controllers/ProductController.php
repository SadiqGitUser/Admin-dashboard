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
        $products = Product::latest()->paginate(5);
        return view('products.index', compact('products'))->with(request()->input('page'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate the input

        $request->validate([
            'name'        =>'required',
            'count'       =>'required',
            'sale_price'  =>'required',
            'maya_deyeri' =>'required',
            'date'        =>'required',
        ]);

        //create a new product

        $name            = $request->name;
        $count           = $request->count;
        $sale_price      = $request->sale_price;
        $maya_deyeri     = $request->maya_deyeri;
        $date            = $request->date;
        $qazanc          = (($count*$sale_price)-($count*$maya_deyeri));


        Product::create([
            "name"        => $name,
            "count"       => $count,
            "sale_price" => $sale_price,
            "maya_deyeri" => $maya_deyeri,
            "date"        => $date,
            "qazanc"      => $qazanc,

        ]);

        //redirect the user
        return redirect()->route('products.index')->with('success','məhsul uğurla qeydiyyata alındı');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
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
            'name'        =>'required',
            'count'       =>'required',
            'sale_price'  =>'required',
            'maya_deyeri' =>'required',
            'date'        =>'required',
        ]);

        //create a new product

        $name            = $request->name;
        $count           = $request->count;
        $sale_price      = $request->sale_price;
        $maya_deyeri     = $request->maya_deyeri;
        $date            = $request->date;
        $qazanc          = (($count*$sale_price)-($count*$maya_deyeri));


        $product->update([
            "name"        => $name,
            "count"       => $count,
            "sale_price" => $sale_price,
            "maya_deyeri" => $maya_deyeri,
            "date"        => $date,
            "qazanc"      => $qazanc,

        ]);

        //redirect the user
        return redirect()->route('products.index')->with('success','Seçdiyiniz məhsul yeniləndi');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //delete the product
        $product->delete();
        //redirect the user
        return redirect()->route('products.index')->with('success','Məhsul silindi');
    }

}
