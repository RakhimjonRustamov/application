<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
	  /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    
	 public function index(){
    	return view('admin.dashboard');
    }

    public function superadminLogout(){

        Auth::guard('admin')->logout();

        return redirect('/');
    }
}
