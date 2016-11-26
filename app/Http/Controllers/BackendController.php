<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{

	public function __construct() {
		$this->middleware("sentinel");
		$this->middleware("isAdmin");
	}

    public function index() {
    	return view("backend.index");
    }
}
