<?php

namespace Barad\Http\Controllers;

use Barad\Customer;
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
        $cookie_basket = json_decode($request->cookie('basket'), true);
        $db_basket = array();
        $customer = null;

        if(!$request->ajax()) {
            echo "<pre>";
            var_dump($cookie_basket);
            echo "<hr>";
        }

        if(Auth::check()){
            $user = Auth::user();
            $user = $user->toArray();
            $customer = Customer::find($user['id']);
            if($customer != NULL){
                $customer_array = $customer->toArray();
                $db_basket = json_decode($customer_array['basket'], true);
            }
        }
        if(sizeof($db_basket)>0 && sizeof($cookie_basket)==0) {
            return json_encode($db_basket);
        }elseif(sizeof($db_basket)==0 && sizeof($cookie_basket)>0) {

            $cookie_basket = json_encode($cookie_basket);
            if($customer!=null) {
                $customer->basket = $cookie_basket;
                $customer->save();
            }
            return $cookie_basket;

        }elseif(sizeof($db_basket)>0 && sizeof($cookie_basket)>0){
            foreach( $db_basket as $key => $db_item) {
                $new = true;
                $cookie_item = array();
                foreach ($cookie_basket as $key_c => $cookie_item)
                    if ($db_item['id'] == $cookie_item['id']) {
                        $db_basket[$key]['num'] += $cookie_item['num'];
                        $new = false;
                    }
                if($new)
                    $db_basket[] = $cookie_item;
            }
            $db_basket = json_encode($db_basket);
            if($customer!=null) {
                $customer->basket = $db_basket;
                $customer->save();
            }
            return $db_basket;
        }
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
            $basket = json_encode($basket);
            if(Auth::check()) {
                $user = Auth::user();
                $user = $user->toArray();
                $customer = Customer::find($user['id']);
                if($customer != NULL){
                    $customer->basket = $basket;
                    $customer->save();
                }
            }
            return response('Cookie set')->withCookie(cookie()->forever('basket', $basket));
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

            $basket = json_encode($basket);
            if(Auth::check()) {
                $user = Auth::user();
                $user = $user->toArray();
                $customer = Customer::find($user['id']);
                if($customer != NULL){
                    $customer->basket = $basket;
                    $customer->save();
                }
            }
            return response('removed from cookie')->withCookie(cookie()->forever('basket', $basket));
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
