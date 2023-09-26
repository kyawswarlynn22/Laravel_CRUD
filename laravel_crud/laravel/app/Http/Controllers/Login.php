<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Rules\PasswordValidation;
use App\Rules\UsernameValidation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Validation\Rule;

class Login extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Auth.Login');
    }

    public function signup()
    {
        return view('auth.Signup');
    }

    public function customeRegistration(Request $request)
    {
        $request->validate([
            $name = 'name' => ['required', new UsernameValidation],
            'email' => 'required|email|unique:users',
            'password' => [
                'required',
                'string',
                'min:8', new PasswordValidation($request)
            ],
        ]);
        $data = $request->all();
        $check = $this->create($data);
        return redirect("dashboard")->withSuccess('have signed-in');
    }


    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function dashboard()
    {
        if (Auth::check()) {
            return redirect('/dashboarddata');
        }

        return redirect('/')->withSuccess('are not allowed to access');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function signOut()
    {
        Session::flush();
        Auth::logout();

        return Redirect('/');
    }

    /**
     * Update the specified resource in storage.
     */
    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                ->withSuccess('Signed in');
        }

        return redirect("/")->withSuccess('Login details are not valid');
    }

  
 
}
