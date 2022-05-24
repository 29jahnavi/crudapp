<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\register;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login() {
        return view('Frontend.login');
    }

    public function userlogin(Request $request){

        $user= register::where(['email'=>$request->email])->first();

        if($user){
            $pass = Crypt::decryptString($user->password);
            if($pass != $request->password){
                $res['loginf'] = "unsuccessful";
                $res['msg'] = "Username or password is not matched";
            }else{
                $res['login'] = "successful";
                $res['msg2'] = "login successful";
                
                $request->session()->put('userSession',1);
                $request->session()->put('user',$user);

            }
        }
        echo json_encode($res);   
    }
    public function flush(Request $request){
        $r=$request->session()->flush();
        return redirect('/login');
    }
}
