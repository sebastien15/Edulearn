<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class platformController extends Controller
{
    public function index(){
    	return view('publicUsers.index');
    }
}
