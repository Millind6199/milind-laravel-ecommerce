<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class Product_listController extends Controller
{
    public function index()
    {
        $data = Product::get();

        $response['status'] = 'success';
        $response['message'] = 'Show Data';
        $response['data'] = $data;

        return $response;
    }
    public function store(Request $request) {
        $request->file('product_image')->move('uploads/products',$request->file('product_image')->getClientOriginalName());
//    dd($request->all());
        $data = Product::create([
            'product_name' => $request->product_name,
            'product_details' => $request->product_details,
            'product_amount' => $request->product_amount,
            'product_image' => $request->file('product_image')->getClientOriginalName(),
            'cat_id' => $request->category  ,

        ]);

        $response['status'] = 'success';
        $response['message'] = 'Insert Data';
        $response['data'] = $data;

        return $response;
    }
    public function delete($id){
        Product::destroy($id);

        $response['status'] = 'success';
        $response['massage'] = 'Data Deleted';
        $response['data'] = [];

        return $response;
    }
}
