<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


//Use of multiple Models.
use App;
use App\Doctor;
use App\Speciality;

class DoctorController extends Controller{
    public function index(){

        $queryDoctor = Doctor::query()->join('users', 'users.id', '=', 'doctors.id');
        $queryDoctor->join('specialities', 'speciality_id', '=', 'specialities.id');
        $queryDoctor->orderBy('users.name','desc');
        $queryDoctor->where('specialities.name', '=', 'Neurologist');
        $doctors = $queryDoctor->paginate(4);


        $specialities = Speciality::all();


       //$doctors = Doctor::paginate(4);
        //$doctors = DB::table('doctors')->paginate(15);
       // dd($doctors);
      return view('admin.doctor.list',compact('doctors','specialities'));
    }

    public function create(){
        return view('admin.doctor.add');
    }
    public function store(){
        dd(request()->all());
        return request()->all();
    }
}
