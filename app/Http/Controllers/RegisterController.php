<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use App\Models\register;
use App\Notifications\WelcomeEmailNotification;
use Illuminate\Support\Facades\Notification;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register() {
        $user = User::first();
        Notification::send($user, new WelcomeEmailNotification);
        // dd('done');
        return view('Frontend.register');
    }
  
     public function registrations(Request $req){
        $data = [
           'name' => $req->name,
           'email' => $req->email,
           'password' => Crypt::encryptString($req->password),
        ];
        register::create($data);
        $res['status'] = "successful";
        $res['msg2'] = "data Inserted";
        echo json_encode($res);
    }
    public function check_email(Request $req){
      $users=register::where('email', '=', $req->email)->first();
  
        if($users){
            return "false";
        }else{
            return "true";
        }
    }
}
