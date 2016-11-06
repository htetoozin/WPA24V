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
    	var_dump($request->all());
    }

    public function getRegister() {
    	return view("backend.register");
    }

    public function postRegister(Request $request) {
    	$this->validate($request, [
            'name'      => 'required|min:4',
            'email'     => 'required|unique:users|email',
            'password'  => 'required|min:4|confirmed',
            'password_confirmation' => 'same:password',
            'terms_and_condition' => 'accepted'
            ]);
    }
}













