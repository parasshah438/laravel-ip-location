<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;
use App\Http\Requests\StudentRequest;
use Hash;

class StudentController extends Controller
{
    
    public function index()
    {
        $data = Student::latest('id')->paginate(10);
        return view('student.index',compact('data'));
    }

   
    public function show($ip)
    {   
        $data = \Location::get($ip);
        return view('student.show',compact('data'));
    }

}
