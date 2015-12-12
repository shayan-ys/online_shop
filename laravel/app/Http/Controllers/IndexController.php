<?php

namespace Barad\Http\Controllers;

use Barad\Product;
use Illuminate\Http\Request;

use Barad\Http\Requests;
use Barad\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products_latest = Product::orderBy('created_at', 'DESC')->take(10)->get()->toArray();
        $products_rand1 = Product::orderByRaw("RAND()")->take(10)->get()->toArray();
        $products_rand2 = Product::orderByRaw("RAND()")->take(10)->get()->toArray();
        $products_rand3 = Product::orderByRaw("RAND()")->take(3)->get()->toArray();
        $products_rand5 = Product::orderByRaw("RAND()")->take(5)->get()->toArray();

        $head = array('title'=> 'صفحه اصلی');
        $data = array(
            'head'=> $head,
            'products'=>array(
                'latest'=>$products_latest,
                'rand1'=>$products_rand1,
                'rand2'=>$products_rand2,
                'rand3'=>$products_rand3,
                'rand5'=>$products_rand5
            ));
        return view('index', $data);
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
        //
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
