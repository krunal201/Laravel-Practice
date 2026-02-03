<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use Illuminate\Http\Request;
use App\Models\Admins;
class AdminController extends Controller
{
    public function login(Request $request)
    {
        $email = $request->email;
        $password = base64_encode($request->password);

        $admin = DB::table('admins')->where('email', $email)->first();

        if ($admin && $password === $admin->password) {
            Auth::loginUsingId($admin->id);
            session()->put('email', $email);
            session()->put('role', 'admin');
            return redirect('dashboard');
        }else{
            session()->put('error', 'Wrong Credentials');
            // return redirect('/');
        }
    }

    public function resetPassword(Request $request)
    {
        $email=$request->input('email');
        $pass=$request->input('password');
        $encPass=base64_encode($pass);
        $up=Admins::where('email', $email)->update([
            'password'=>$encPass
        ]);
        return redirect()->back();
    }

    public function logout()
    {
        session()->forget('email');
        session()->flush();

        return redirect('/');
    }
}
