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
    	
    }
}
