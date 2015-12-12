<?php

namespace Barad\Http\Controllers;

use Barad\Customer;
use Barad\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Barad\Http\Requests;
use Barad\Http\Controllers\Controller;

use Validator;
use Input;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $user = Auth::user();
            $customer = Customer::find($user->id);
            if($customer==null){
                $customer = new Customer;
                $customer->id_user = $user->id;
                $customer->save();
            }
            $customer = array_merge($customer->toArray(), $user->toArray());
            return view('customer.show', array(
                'head'=>array('title'=> "منو کاربری".$customer['name']),
                'customer' => $customer));
        }
        return redirect('/user/login');
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
        if(!Auth::check()) return;
        $request = Input::all();
        $validator = Validator::make($request, [
            'name' => 'required|max:255'
        ]);

        if ($validator->fails()) {
            //die();
        }

        unset($request['_token']);

        $id_user = Auth::user()->id;
        $user = User::find($id_user);
        $customer = Customer::where('id_user', $id_user)->first();
        $user->name = $request['name'];
        $customer->address = $request['address'];
        $customer->phone = $request['phone'];
        $customer->save();
        $user->save();

        return view('customer.show',array(
            'head'=>array('title'=> "منو کاربری".$customer['name']),
            'success'=>'success',
            'customer' => $customer
        ));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer = Customer::find($id);
        return view('customer.show', array('customer' => $customer));
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
