<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

//Use of multiple Models.
use App;
use App\Doctor;

class DoctorController extends Controller{
    public function index(){
        $doctors = Doctor::all();
        return view('admin.doctor.list',compact('doctors'));
    }

    public function create(){
        return view('admin.doctor.add');
    }
}
