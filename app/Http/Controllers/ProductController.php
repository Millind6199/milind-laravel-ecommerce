<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;

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
//        dd($request->all());
        $request->validate([
            'category' => 'required',
            'product_name' => 'required',
            'product_details' => 'required',
            'product_image' => 'required',
            'product_amount' => 'required',

        ]);

        $request->file('product_image')->move('uploads/products',$request->file('product_image')->getClientOriginalName());

        $product = Product::create([
            'product_name' => $request->product_name,
            'product_details' => $request->product_details,
            'product_image' => $request->file('product_image')->getClientOriginalName(),
            'product_amount' => $request->product_amount,
            'cat_id' => $request->category  ,
        ]);
        return redirect('/viewproduct');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
//         dd();
        return view('Admin.view_product',[ 'data' => Product::all()] ,
            ['category' => Category::all() , ]);
        // return view(,[ 'data' => Product::all()]);
    }
    public function show2()
    {
        return view('User.home',[ 'data' => Product::all()]);

    }

    public function show3()
    {
        return view('Admin.dashboard',['data' => Product::all()] , ['user' => User::all()]);
    }

    public function buy_now($id)
    {
        // dd($id);
        return view('User.buy_now',['data' => Product::where('id',$id)->first()]);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $id)
    {
        return view('Admin.add_product',['setedit' => 1 ,'product' => $id]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // print_r('$product');
        $request->file('product_image')->move('uploads/products',$request->file('product_image')->getClientOriginalName());

        Product::where('id',$id)->update(
            ['product_name'=>$request['product_name'],
                'product_details'=>$request['product_details'],
                'product_image'=> $request->file('product_image')->getClientOriginalName(),
                'product_amount'=>$request['product_amount']]);
        return redirect('viewproduct');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product , $id)
    {
        // echo 'here';
        Product::destroy($id);
        return redirect('/viewproduct');
    }
    public function updatestatus(Request $request )
    {
        //        var_dump($request->input());
        -
        Product::where('id',$request->id)->update(['product_status'=>$request->status]);
        // response me kuchh return to nahi kiya hai...
    }
}
