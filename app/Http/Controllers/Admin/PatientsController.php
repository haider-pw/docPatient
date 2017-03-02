<?php

namespace App\Http\Controllers\Admin;

use App\Patient;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientsController extends Controller
{
    public function index(){
        $patients = Patient::all();
//        dd($patients);
        return view('admin.patient.list',compact('patients'));
    }
}
