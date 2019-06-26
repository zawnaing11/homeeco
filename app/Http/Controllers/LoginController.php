<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Spatie\Permission\Models\Role;
use Auth;

class LoginController extends Controller
{
    public function showLogin()
    {
        return view('frontEnd.auth.login');
    }

    public function validateLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        return $this->login($request);
    }

    public function login($request) {
        $credentials = $request->only('email', 'password');
        $authUser = Auth::attempt($credentials);

        if ($authUser) {
            $user = Auth::user();
            if ($user->hasRole('master')) {
                return redirect()->route('master');
            } elseif ($user->hasRole('staff')) {
                return redirect()->route('staff');
            } else {
                return redirect()->route('admin.dashboard');
            }
        } else {
            return redirect()->back();
        }
    }

    public function logout() {
        Auth::logout();
        return redirect()->route('home');
    }
}
