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

    public function NurserySchools(){
        return view('website.Nursery_schools');
    }

    public function secondarySchools(){
        return view('website.secondary_schools');
    }

    public function singleSecondary(){
        return view('website.secondary.single_secondary');
    }

    public function admissionSecondary(){
        return view('website.secondary.admission');
    }

    public function PrimarySchools(){
        return view('website.primary_schools');
    }

    public function UniversitySchools(){
        return view('website.university_schools');
    }

}
