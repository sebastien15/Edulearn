<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class platformController extends Controller
{
    public function index(){
    	return view('platform.index');
    }
    public function watch(){
    	return view('platform.watch');
    }
    public function category_videos(){
    	return view('platform.category_videos');
    }
    public function category_chanels(){
    	return view('platform.category_chanels');
    }
    public function category_playlists(){
    	return view('platform.category_playlists');
    }
    public function blog(){
    	return view('platform.blog');
    }
    public function upload(){
    	return view('platform.upload');
    }
    public function written(){
        return view('platform.written');
    }
    public function writtenSingle(){
        return view('platform.writtenSingle');
    }
}
