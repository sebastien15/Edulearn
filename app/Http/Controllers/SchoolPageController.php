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
    public function teacherIndex()
    {
        return view ('school.Teacher.dashboard');
    }
    public function teacherCourses()
    {
        return view ('school.Teacher.courses.allcourses');
    }
    public function teacherCoursesSingle()
    {
        return view ('school.Teacher.courses.single_course');
    }
    public function teacherUpload()
    {
        return view ('school.Teacher.courses.upload');
    }
    public function teacherProfile()
    {
        return view ('school.Teacher.profile.profile');
    }
    public function login()
    {
        return view ('school.login');
    }
    public function register()
    {
        return view ('school.register');
    }
    public function dos()
    {
        return view ('school.dos.dashboard');
    }

    public function allcourses()
    {
        return view ('school.dos.courses.allCourses');
    }
    public function singleCourse()
    {
        return view ('school.dos.courses.courseSingle');
    }
    public function allClasses()
    {
        return view ('school.dos.classes.allClasses');
    }

    public function singleClasse()
    {
        return view ('school.dos.classes.classe_single');
    }

}

