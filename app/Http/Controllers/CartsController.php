<?php

namespace App\Http\Controllers;

use App\Models\carts;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use App\Models\Product;

class CartsController extends Controller
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
    public function store($product_id)
    {
//        dd($product_id);

        $user_id = Auth::guard('admin')->user()->id;
        $cart = carts::create([
            'product_id' => $product_id,
            'user_id' => $user_id,
        ]);

        return redirect("/showcart");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = carts::where('user_id', Auth::guard('admin')->user()->id)->with(['product'])->get();
//        echo "<pre/>";
//        print_r($data->toArray());die;
            return view('User.cart' , [ 'data' => $data]);
    }
//yaha show mw product aur cart table ka data lana hai sara ok userwise na?haa woh toh
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function edit(carts $carts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, carts $carts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\carts  $carts
     * @return \Illuminate\Http\Response
     */
    public function destroy(carts $carts ,$id)
    {
        carts::destroy($id);
        return redirect('/showcart');
    }
}
