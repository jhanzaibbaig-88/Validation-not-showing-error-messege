<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    function login(Request $req){
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Ops! Something went Worng.";
        }
        else{

            $req->session()->put('user',$user);
        
            $user_type = $user->user_type;
       
            if($user_type == '1')
            {
                return redirect('/admin');   
            }
            else
            {
                return redirect('/');
            }
        }
    }

    function register(Request $request)
    {
        // if ($v->fails()) {
        //     dd($v->errors);
        //   }
    //    dd($req->all());
    $validatedData = Validator::make($request->all(), [
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        'confirm_password' => 'required',
    ])->validate();

    $name = $validatedData['name'];
    $icons = $validatedData['email'];
    $name = $validatedData['password'];
    $icons = $validatedData['confirm_password'];

        // echo "<pre>";
        // print_r($req->all());

        // $user = new User;
        // $user->name = $req->name;
        // $user->user_type = 0;
        // $user->email = $req->email;
        // $user->password = Hash::make($req->password);
        // $user->confrim_password = Hash::make($req->confrim_password);
        // $user->save();
        // return redirect('/login');
    }

    function viewForm()
    {   
        //dd('hello');
        return view('registerationform');
    }
}
