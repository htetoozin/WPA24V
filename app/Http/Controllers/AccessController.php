<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccessController extends Controller
{
    //
    public function getLogin() {
    	return view("backend.login");
    }

    public function postLogin(Request $request) {
    	
    }
}
