<?php

namespace Barad\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Cookie\Middleware;

use Barad\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Barad\Http\Controllers\Controller;
use Illuminate\Support\Facades\Cookie;

use Input;

class BasketController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return "hello";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get(Request $request) {
        if(!$request->ajax()) {
            echo "<pre>";
            var_dump(json_decode($request->cookie('basket'), true));
            echo "<hr>";
        }
        return $request->cookie('basket');
    }
    public function reset(Request $request) {
        return response('Cookie cleared')->withCookie(cookie('basket',null));
    }
    public function add(Request $request)
    {
        if($request->ajax()) {
            $data = Input::all();

            $basket = $request->cookie('basket');
            $basket = json_decode($basket, true);

            $new = true;
            foreach($basket as $key=>$item) {
                if( $item['id'] == $data['id']) {
                    $basket[$key]['num'] += $data['num'];
                    $new = false;
                }
            }
            if($new)
                $basket[] = $data;
            if(Auth::check()) {

            }
            return response('Cookie set')->withCookie(cookie()->forever('basket', json_encode($basket)));
        }
        return "false";
    }

    public function remove(Request $request)
    {
        if($request->ajax()) {
            $data = Input::all();

            $basket = $request->cookie('basket');
            $basket = json_decode($basket, true);

            $new = true;
            foreach($basket as $key=>$item) {
                if( $item['id'] == $data['id']) {
                    unset($basket[$key]);
                }
            }
            if(Auth::check()) {

            }
            return response('removed from cookie')->withCookie(cookie()->forever('basket', json_encode($basket)));
        }
        return "false";
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        echo "hello";
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
