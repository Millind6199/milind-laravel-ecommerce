<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class User_listController extends Controller
{
    public function index()
    {
        $data = User::get();

        if(Auth::guard('admin')->attempt($data)){
            if($data->email == "admin@admin.com") {
                $response['status'] = 'success';
                $response['message'] = 'login successfully';
                $response['data'] = $data;
                return $response;
            }
            else{
                echo "Nahi hua";
            }


        }
        else
        {
            $response['status'] = 'failed';
            $response['message'] = 'login Invalid';
            return $response;
        }


    }
}
