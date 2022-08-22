<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $req){
        if ($req->isMethod("post")) {
            // $loginData = $req->only("email","password");
            $contact = $req->contact;
            $password = $req->password;
             
            $getUser  = User::where('contact',$contact)->first();
            
            $loginData['email'] = $getUser->email;
            $loginData['password'] = $password;

            if (Auth::attempt($loginData)) {
                return redirect()->route('homepage');
            }
            else{
                return redirect()->back()->with("error","sorry Username and Password is incorrect try again");
            }
        }
        return view('login');
    }

    public function register(Request $req){
        if ($req->isMethod("post")) {
            $data = $req->validate([
                'name' => 'required',
                'email' => 'required',
                'contact' => 'required',
                'password' => 'required',
            ]);
    
            User::create($data);
            return redirect()->route('login');
        }
        return view ("register");
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login');
    }
}
