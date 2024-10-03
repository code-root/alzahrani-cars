<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller {


    public function logout() {
        Auth::logout();
        return redirect('/login');
    }


    public function login (){
        return view('auth.login');

    }

    public function PageRegister (){
        return view('auth.register');

    }



    public function customLogin(Request $request) {
        // return 's';

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::guard('dashboard')->attempt($credentials)) {
            return redirect()->route('dashboard-index')->with('success', 'Signed in');
        }

        // return 's';
        return redirect()->route('login')->with('error', 'Login details are not valid')->withInput($request->only('email'));
    }



    public function register(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:admins',
            'password' => 'required|min:6',
        ]);

        $admin = Admin::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        if ($admin) {
            return redirect()->route('login')->with('success', 'Admin registered successfully');
        }

        return back()->withInput($request->only('name', 'email'))->with('error', 'Failed to register admin');
    }

    public function home () {

        return view('dashboard.home');


    }
   



}
