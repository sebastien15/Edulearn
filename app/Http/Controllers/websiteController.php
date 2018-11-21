<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class websiteController extends Controller
{
    public function index(){
    	return view('website.index');
    }

    public function about(){
    	return view('website.aboutUs');
    }

    public function blog(){
    	return view('website.blog');
    }
    
    public function contact(){
    	return view('website.contactUs');
    }

    public function courses(){
    	return view('website.courses');
    }

    public function gallery(){
    	return view('website.gallery');
    }
    
    public function pages(){
    	return view('website.pages');
    }

    public function login(){
        return view('publicUsers.login');
    }
    public function register(){
        return view('publicUsers.register');
    }

}
