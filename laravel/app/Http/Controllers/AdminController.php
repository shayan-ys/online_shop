<?php

namespace Barad\Http\Controllers;

use Barad\Admin;
use Barad\Book;
use Barad\Customer;
use Barad\Laptop;
use Barad\Product;
use Illuminate\Http\Request;

use Barad\Http\Requests;
use Barad\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Validator;
use Input;

class AdminController extends Controller
{
    public static $base_url;
    public static $admin;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function adminCheck()
    {
        self::$base_url = asset('/');
        $admin = Auth::user()['original'];
        self::$admin = array('name' => $admin['name']);
        if (Auth::check()) {
            $admin_secure = Admin::where('email', '=', $admin['email'])->where('password', '=', $admin['password'])->first();
            // He is User but not admin
            if ($admin_secure == null){
                return redirect('/customer');
            }
        }else{
            Session::put('user_type', 'admin');
            return redirect('/user/login');
        }
        return true;
    }
    public function index()
    {
        if(self::adminCheck()!==true)
            return self::adminCheck();

        return view('admin.dashboard', array(
            'head'=>array('title'=> 'Dashboard'),
            'admin' => self::$admin));
    }


    public function product($action){
        self::adminCheck();
        switch($action){
            case 'add': return self::addProduct(); break;
            default: return self::indexProduct();
        }
    }
    public function postAddProduct(){
        $request = Input::all();
        $validator = Validator::make($request, [
            'name' => 'required|max:255',
            'cat'=> 'required'
        ]);
        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
            die();
        }

        unset($request['_token']);
        $result = Product::create($request);
        $result = $result->toArray();

        $request['id_product'] = $result['id_product'];

        if($request['category'] == 'laptop')
            Laptop::create($request);
        elseif($request['category'] == 'laptop')
            Book::create($request);

        return redirect('/admin/product/add');
    }

    protected function addProduct(){

        return view('admin.product.add', array(
            'head'=>array('title'=> 'Product'),
            'admin' => self::$admin));
    }
    protected function indexProduct(){

        echo "h";
        return view('admin.product.index', array(
            'head'=>array('title'=> 'Product'),
            'admin' => self::$admin));
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
