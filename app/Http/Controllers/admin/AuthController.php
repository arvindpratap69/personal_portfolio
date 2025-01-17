<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
// use ForgotPasswordMail;
use Illuminate\Http\Request;
use App\Mail\ForgotPasswordMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function index()
    {
        // $password = "satyam123";
        // $dd  = Hash::make($password);
        // dd($dd);
        return view('admin.auth.login');
    }
    function ForgotPassword()
    {
        // echo "Forgot Password ";
        // die;
        return view('admin.auth.forgot');
    }
    function login(Request $request)
    {
        // dd($request->all());
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            if (!empty(Auth::user()->status)) {
                if (Auth::user()->is_role == '1') {
                    return redirect()->route('admin.dashboard')->with('success', "User Login Successfully");
                }
            } else {
                $user_id = Auth::user()->id;
                Auth::logout();
                $user = User::find($user_id);
                return redirect()->back()->with('success', 'This email is not verified yet!');
            }
        } else {
            return redirect()->back()->with('error', 'PLease enter the correct credentials');
        }
    }

    function Logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', "Logout Suyccessfully");
    }
    function Forgot_Password(Request $request)
    {
        $random_password = rand(111111111, 999999999);
        $user = User::where('email', '=', $request->email)->first();

        if ($user) {
            $user->password = Hash::make($random_password);
            $user->save();

            // Pass password_random as a separate variable to the email
            $password_random = $random_password;
            Mail::to($user->email)->send(new ForgotPasswordMail($user, $password_random));

            return redirect()->back()->with('success', "Password successfully sent to your email!");
        } else {
            return redirect()->back()->with('error', 'Email ID not found!');
        }
    }
}


// $2y$12$RQBYHG.7nCl7.DRJsUqJvuQpzl.E6NAMIv2QTxFz5E5EdONSW3agm