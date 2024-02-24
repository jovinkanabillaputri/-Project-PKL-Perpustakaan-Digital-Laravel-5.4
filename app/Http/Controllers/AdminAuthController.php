<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Illuminate\Support\Str;

class AdminAuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login() 
    {
    return view('AdminAuth.auth');
    }

        public function postlogin(request $request){
            if (Auth::attempt($request->only('email', 'password'))){
                return redirect('/dashboard');
            }
            return redirect('login');
        }
    public function logout() {
            Auth::logout();
            return redirect('login');
        }
         
        public function registrasi()
    {
        return view('auth.registrasi');
    }
    public function simpanregistrasi(request $request){
        // $this->validate ($request,[
        //     'name'  => 'required',
        //     'level' => 'required', 
        //     'email' => 'required|string|max:150|unique:users,email',
        //     'password' =>'required|max:20',
        // ]);
        $insert= user::create([
            'name' => $request->name,
            'level' => 'anggota',
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);
        
        return redirect('login');

    }
}
