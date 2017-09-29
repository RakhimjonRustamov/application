<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
class AdminLoginController extends Controller
{
	public function __construct(){
		$this->middleware('guest:admin');
	}
     /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('auth.superadmin-login');
    }

     public function login(Request $request){
   	// Validate the form data 
    	$this->validate($request, [
    		'email'=>'required|email',
    		'password'=> 'required|min:6'	
    		]);

		if(Auth::guard('admin')->attempt(['email'=>$request->email, 'password'=>$request->password], $request->remember))
		{	
			return redirect()->intended(route('superadmin.dashboard'));

		}else{

			return redirect()->back()->withInput($request->only('email', 'remember'));
		}
    }
}
