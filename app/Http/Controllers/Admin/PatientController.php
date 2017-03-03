<?php

namespace App\Http\Controllers\Admin;
use App;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    public function index(){
        $patients = Patient::paginate(3);
        return view('admin.patient.list',compact('patients'));
    }
}
