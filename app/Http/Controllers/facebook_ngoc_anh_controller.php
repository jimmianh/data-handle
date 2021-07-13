<?php

namespace App\Http\Controllers;

use App\Enums\Status;
use App\Models\articlemodel;
use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class facebook_ngoc_anh_controller extends Controller
{
    public function viewIndex(){
        return view('demo-facebook-ngoc-anh.login_and_register');
    }

    public function viewRegister(Request $request){
        $user = new UserModel();
        $user -> fill($request->all());
        $user->password = Hash::make($request['password']);
        $user->save();
        return redirect()->route('ngocanhIndex')->with('create_account_success','Tạo thành công với tên người dùng là '.$user->firstName.' '.$user->lastName);
    }

    public function login(Request $request){
        $email = $request->email;
        $password= $request->password;
        if(Auth::attempt(['email'=>$email,'password'=>$password])){
            return redirect()->route('ngocanhProfile');
        }else{
            return redirect()->route('ngocanhIndex')->with('login_fail','sai thông tin đăng nhập hoặc tài khoản không tồn tại vui lòng đăng ký');
        }
    }



    public function addStatus(Request $request){
        $articles = new articlemodel();
        $articles->fill($request->all());
        $articles->user_model_id= Auth::id();
        $articles->save();
        $user = UserModel::query()->where('id','=',Auth::id())->with('articles')->get();
        return view('demo-facebook-ngoc-anh.profile',['user'=>$user[0]]);
    }

    public function home(){
        $articles = articlemodel::query()->where('status', '=',Status::ACTIVE)->with('user')->get();
    return view('demo-facebook-ngoc-anh.index',['articles'=>$articles, 'user'=>Auth::user()]);
    }

    public function profile(){
        if(Auth::check()){
            $user = UserModel::query()->where('id','=',Auth::id())->with('articles')->get();
            return view('demo-facebook-ngoc-anh.profile',['user'=>$user[0]]);
        }else{
            return redirect()->route('ngocanhIndex')->with('login_fail','sai thông tin đăng nhập hoặc tài khoản không tồn tại vui lòng đăng ký');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('ngocanhIndex');
    }
}
