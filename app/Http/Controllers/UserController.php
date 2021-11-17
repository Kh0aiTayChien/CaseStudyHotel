<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
//    public function login(Request $request){
//      $login = $request->only('email',"password");
////          dd(Auth::attempt($login));
//      if(!Auth::attempt($login)){
//            return response()->json([
//               "status" => "401",
//                "message" => "tai khoan va mat khau khog dung",
//            ]);
//
//        }
//        $user = Auth::user();
//        return response()->json([
//            'user' => $user,
//        ], 200);
//
//    }
    public function login(){
    return view('backend.login');
    }

    public function index(){
        return view('backend.admin');
    }
    public function checklogin(Request $request){;

        $login = $request->only('email',"password");

        if(!Auth::attempt($login))
        {
            $request->session()->flash('wrong password' , ' Sai mật khẩu hoặc password ');
        }else
        {
//            $request->session()->push(['name'=>$request->name]);
         return redirect()->route('admin.index');

        }


    }
}
