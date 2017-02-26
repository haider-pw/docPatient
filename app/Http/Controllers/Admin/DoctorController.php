<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Use of multiple Models.
use App;
use App\Doctor;

class DoctorController extends Controller
{
    public function index()
    {
//        return App\User::all();
//        return foo();
        $doctors = Doctor::all();
        return view('admin.doctor.list',compact('doctors'));
    }
}
