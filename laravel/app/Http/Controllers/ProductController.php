<?php

namespace Barad\Http\Controllers;

use Barad\Laptop;
use Barad\Product;
use Illuminate\Http\Request;

use Barad\Http\Requests;
use Barad\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        echo "kooft";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id)->toArray();
        $additional=null;
        if($product['category']=='laptop')
            $additional = Laptop::where('id_product',$id)->first()->toArray();
        elseif($product['category']=='book')
            $additional = Book::where('id_product',$id)->first()->toArray();

        $product = array_merge($product, $additional);
        $head = array('title'=> $product['name']);

        $data = array(
            'head'=> $head,
            'product'=>$product);

        return view('product.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
