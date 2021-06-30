<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Product;

class Product_listController extends Controller
{
    public function index()
    {
        $data = Product::paginate(5);

        $response['status'] = 'success';
        $response['message'] = 'Show Data';
        $response['data'] = $data;
//        $response['token'] = $data->createToken('Api token')->accessToken;

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
//        $response['token'] = $data->createToken('Api token')->accessToken;


        return $response;
    }
    public function delete($id){
        Product::destroy($id);

        $response['status'] = 'success';
        $response['massage'] = 'Data Deleted';
        $response['data'] = [];

        return $response;
    }
    public function viewProduct($id){
//        dd($id);
       $data = Product::where('id',$id)->first();
//            dd($data);
        $response['status'] = 'success';
        $response['message'] = 'Show Data';
        $response['data'] = $data;
//        $response['token'] = $data->createToken('Api token')->accessToken;

        return $response;

    }
    public function ShowDataByCategory($id){
        $data = Product::where('cat_id',$category_id)->get();
//        $category = Category::all();
        $response['status'] = 'success';
        $response['message'] = 'Show Data';
        $response['data'] = $data;

    }
}
