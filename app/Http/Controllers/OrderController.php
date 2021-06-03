<?php

namespace App\Http\Controllers;

use App\Models\carts;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request , $product_id)
    {
//            dd($request->all());
        $user_id = Auth::guard('admin')->user()->id;

        $request->validate([
            'mobile_no' => 'required',
            'address' => 'required',

        ]);

        $order = Order::create([
           'product_id' => $product_id,
           'user_id' => $user_id,
           'address' => $request->address,
            'mobile_no' => $request->mobile_no,
        ]);

        if($order) {
            return redirect('/viewproduct2');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        $data = Order::where('user_id', Auth::guard('admin')->user()->id)->with(['product'])->get();
        return view('User.myorder' , ['data' => $data]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order , $order_id)
    {
        Order::destroy($order_id);
        return redirect('/showorder');
    }
}
