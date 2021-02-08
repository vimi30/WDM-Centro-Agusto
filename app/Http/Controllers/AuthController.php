<?php

namespace App\Http\Controllers;
Use App\User;
use Illuminate\Http\Request;

use Validator,Redirect,Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Session;


class AuthController extends Controller
{
	public function authenticated( \Illuminate\Http\Request $request, \App\User $user ) {
    flash()->success( 'Logged in', "You have been logged in, {$user->name}" );
    return redirect()->intended($this->redirectPath());
}
	public function inicio()
    {
        return view('frontend.Inicio_de_sesion');
    }  

    public function registration()
    {
        return view('frontend.Registration');
    }

     public function postLogin(Request $request)
    {
        request()->validate([
        'email' => 'required',
        'password' => 'required',
        ]);
 
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            // Authentication passed...
        	#$request->session()->put('user','email');
        	$user = Auth::User();
    		Session::put('user', $user);
    		$user=Session::get('user');
    		#return $user->name;
    		Session::put('user', $user->name);
    		Session::flash('message', 'Login success'); 
    		#return $user->name;
            return redirect()->intended('/postLoginProjectView');


        }
        return Redirect::to("/Inicio_de_sesion");
    }

    public function postRegistration(Request $request)
    {  
        request()->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        ]);
         
        $data = $request->all();
 
        $check = $this->create($data);
       
        return Redirect::to("/Inicio_de_sesion");
    }

    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }


    public function logOut()
    {
        Session::flush();
        Auth::logout();
        return view('frontend.Inicio_de_sesion');
    }

}
