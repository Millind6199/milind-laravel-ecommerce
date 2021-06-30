<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class Category_listcontroller extends Controller
{
    public function index()
    {
        $data = Category::get();

        $response['status'] = 'success';
        $response['message'] = 'Show Data';
        $response['data'] = $data;
//        $response['token'] = $data->createToken('Api token')->accessToken;

        return $response;
    }

}
