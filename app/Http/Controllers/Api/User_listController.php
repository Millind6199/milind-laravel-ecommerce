<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class User_listController extends Controller
{
    public function index(Request $request)
    {
//        $data = User::get();
//        return $data;

//        return $request->all();
        $validate = [
            'email' => $request->email,
            'password' => $request->password
        ];


        if(Auth::guard('admin')->attempt($validate)){
            if($validate['email'] == "admin@admin.com") {
                    $data = Auth::guard('admin')->user();
//                    dd($data);
                $response['status'] = 'success';
                $response['message'] = 'login successfully';
                $response['data'] = $data;
                $response['token'] = $data->createToken('Api token')->accessToken;

                return $response;
            }
            else{
                echo "user Side";
            }


        }
        else
        {
                return response()->json(['error'=>'Unauthorised'], 401);

        }


    }
    public function store(Request $request){

//        return $request;

        if($request['password'] == $request['cpassword']) {
            $user = User::create([
                'name' => $request->username,
                'email' => $request->email,
                'password' => Hash::make($request->password),

            ]);
            $response['status'] = 'success';
            $response['message'] = 'Signup successfully';
            $response['data'] = $user;
            $response['token'] = $user->createToken('Api token')->accessToken;

            return $response;
        }
        else{
            return response()->json(['error'=>'Unauthorised'], 401);
        }

        }
}
