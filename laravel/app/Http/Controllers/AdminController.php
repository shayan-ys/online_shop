<?php

namespace Barad\Http\Controllers;

use Barad\Admin;
use Barad\Customer;
use Illuminate\Http\Request;

use Barad\Http\Requests;
use Barad\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminCheck()
    {
        if (Auth::check()) {
            $admin_secure = Admin::where('email', '=', Auth::user()['original']['email'])->where('password', '=', Auth::user()['original']['password'])->first();
            // He is User but not admin
            if ($admin_secure == null){
                redirect('/online_shop/laravel/public/customer');
                echo "unauthorized access go to: <a href='/online_shop/laravel/public/customer'>customer</a>";
                die();
            }
        }else{
            Session::put('user_type', 'admin');
            redirect('/online_shop/laravel/public/user/login');
            echo "unauthorized access go to: <a href='/online_shop/laravel/public/user/login'>login page</a>";
            die();
        }
    }
    public function index()
    {
        self::adminCheck();

        $admin = array('name' => Auth::user()['original']['name']);
        return view('admin.dashboard', array(
            'head'=>array('title'=> 'Dashboard'),
            'admin' => $admin));
    }


    public function product($action){
        echo "hello".$action;
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function create()
//    {
//        //
//    }

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
