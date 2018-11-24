<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolPageController extends Controller
{
    public function index()
    {
        return view ('school.director.dashboard');
    }

    public function message()
    {
        return view ('school.director.message.message');
    }
    public function task()
    {
        return view ('school.director.task');
    }
    public function teachers()
    {
        return view ('school.director.teachers.teachers');
    }
    public function addteacher()
    {
        return view ('school.director.teachers.addTeacher');
    }
}

