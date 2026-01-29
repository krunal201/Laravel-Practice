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
            return redirect('dashboard');
        }
    }

    public function resetPassword(Request $request)
    {
    }

    public function logout()
    {
        session()->forget('email');
        session()->flush();

        return redirect('/');
    }
}
