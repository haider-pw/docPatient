<?php

namespace App\Http\Controllers\Admin;
use App;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    protected $patients;

    public function __construct(Patient $patients)
    {
        $this->patients = $patients;
    }

    public function index(Request $request){
        $patients = $this->patients->latest('created_at')->paginate(3);

        //Check if Request is being Called Using Ajax
        if($request->ajax()){
            return view('admin.patient.load',compact('patients'))->render();
        }

        //Get all diseases for select data
        $diseases = App\Disease::all();

        //Finally Return the View
        return view('admin.patient.list',compact('patients','diseases'));
    }
}
