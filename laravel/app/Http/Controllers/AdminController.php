<?php

namespace Barad\Http\Controllers;

use Barad\Admin;
use Barad\Book;
use Barad\Customer;
use Barad\FileManager;
use Barad\Laptop;
use Barad\Product;
use Illuminate\Http\Request;

use Barad\Http\Requests;
use Barad\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
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
    public function postAddProduct(Request $request){
        $inputs = Input::all();

        echo "<pre>";
        var_dump($inputs);
        echo "<hr>";
        echo "<hr>";
        //die();

        $validator = Validator::make($inputs, [
            'name' => 'required|max:255',
            'category'=> 'required'
        ]);
        if ($validator->fails()) {
            echo "validator failed!";
            $this->throwValidationException(
                $inputs, $validator
            );
            die();
        }

        echo "okeye";
        //die();

        // configure inputs
        $img_file_id = 0; // no image
        if($request->hasFile('image')) {
            $file = Input::file('image');
            $timestamp = str_replace([' ', ':'], '-', Carbon::now()->toDateTimeString());
            $filename = $timestamp. '_' .$file->getClientOriginalName();
            $paths = array(
                'org'       => public_path().'/uploads/images/originals/',
                'resized'   => public_path().'/uploads/images/resized/',
                'small'     => public_path().'/uploads/images/small/'
            );
            $file->move($paths['org'], $filename);
            $img = Image::make($paths['org'].$filename);
            $img->fit(1150,700);
            $img->save($paths['resized'].$filename);
            $img->fit(345,210);
            $img->save($paths['small'].$filename);

            $fileManager = new FileManager();
            $fileManager->title = $inputs['name'];
            $fileManager->desc = $inputs['description'];
            $fileManager->path_org = $paths['org'].$filename;
            $fileManager->path_resized = $paths['resized'].$filename;
            $fileManager->path_small = $paths['small'].$filename;
            $fileManager->save();
            $img_file_id = $fileManager->id;
        }

        //die();
        unset($inputs['_token']);
        unset($inputs['image']);
        $inputs['img_file_id'] = $img_file_id;
        // end configure inputs
        $result = Product::create($inputs);
        $result = $result->toArray();

        $inputs['id_product'] = $result['id_product'];

        if($inputs['category'] == 'laptop')
            Laptop::create($inputs);
        elseif($inputs['category'] == 'laptop')
            Book::create($inputs);

        echo "done";
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
