<?php

namespace App\Http\Controllers;
use Hash;
use Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\ForgotPasswordMail;
use Mail;
use Str;
class AuthController extends Controller
{
    public function login(){

        $data['header_title'] = 'Login'; 
        
        if(!empty(Auth::check())){

           if(Auth::user()->user_type ==1)
            {
                return redirect('admin/dashboard');
            }
            else if(Auth::user()->user_type ==2)
             {
                return redirect('student/dashboard');
             }
            
        }

        return view('auth.login',$data);
    }

    public function AuthLogin(Request $request){

        $remember = !empty($request->remember) ? true : false;

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember))
        { 
            if(Auth::user()->user_type ==1)
            {
                return redirect('admin/dashboard');
            }
            else if(Auth::user()->user_type ==2)
             {
                return redirect('student/dashboard');
             }
             
        }
        else
        {
            return redirect()->back()->with('error', 'User name or password does not match');
        }

    }

    public function forgotPassword()
    {
          return view('auth.forgot');

    }
    public function postForgotPassword(Request $request)
    {
       $user = User::getEmailSingale($request->email);
    //    dd($getEmailSingale);
        //dd($request->all());
        if(!empty($user))
        {
          $user->remember_token = Str::random(30);
          $user->save();

          Mail::to($user->email)->queue(new ForgotPasswordMail($user));
          return redirect()->back()->with('success','please check your email and reset password');

        }
        else
        {
            return redirect()->back()->with('error','email not found');
        }
    }

    public function reset($remember_token)
    {
        $user = User::getTokenSingale($remember_token);
        if(!empty($user))
        {
            $data['user'] = $user;
            return view('auth.reset', $data);
        }
        else
        {
            abort(404);
        }
    }
    public function PostReset($token, Request $request)
    {
        if($request->password == $request->cpassword)
        {
            $user = User::getTokenSingale($token);
            $user->password = Hash::make($request->password);
            $user->remember_token = Str::random(30);
            $user->save();
            return redirect(url(''))->with('success',' Password Successfully Reset');
        }
        else
        {
            return redirect()->back()->with('error','Password and confrim password does not match');
        }
    }

     public function AuthLogout()
        {
            Auth::logout();
            return redirect(url(''));
        }

}

 