<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessController extends Controller
{

	public function index() {
		return view("backend.index");
	}

    //
    public function getLogin() {
    	return view("backend.login");
    }

    public function postLogin(Request $request) {
    	
    }

    public function getRegister() {
    	return view("backend.register");
    }

    public function postRegister(Request $request) {
    	
        $this->validate($request, [
                        'name' => 'required|min:4',
                        'email' => 'required|email|unique:users',
                        'password' => 'required|same:password_confirmed|min:6',
                        'terms_and_condition' => 'accepted'
                    ]);


    }
}
