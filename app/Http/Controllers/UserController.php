<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    public function login()
    {
        return view('backend.login');
    }

    public function index(Request $request)
    {

        if ($request->session()->has('login') && $request->session()->get('login')) {

            return view('backend.admin');
        }


        $message = 'Bạn chưa đăng nhập.';
        $request->session()->flash('not-login', $message);

        return redirect()->route('admin.index');
    }

    public function checklogin(Request $request)
    {

        $login = $request->only('email', "password");

        if (!Auth::attempt($login)) {
            $message = "Sai thông tin email hoặc mật khẩu !";
            $request->session()->flash('wrong-password', $message);
            return redirect()->route('login');
        } else {
            $name = $request->email;
            $request->session()->push('login', true);
            return view('backend.admin');
        }

    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        Auth::logout();
        return redirect()->route('login');
    }

    public function showprofile()
    {
        return view('backend.user.user');
    }

    public function changeinfo(UpdateUserRequest $request)
    {
        $user = User::findOrFail(Auth::user()->id);
        if($user){
            $user->name = $request['name'];
            $user->phone=$request->phone;
            if (!$request->hasFile('image')) {
                $path = $user->image;
            } else {
                $path = $request->file('image')->store('images', 'public');
            }
            $user->image = $path;
            $user->save();
            return redirect()->route('user.showprofile');
        }
    }
}
