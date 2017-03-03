<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Collective\Html\HtmlServiceProvider;
use Collective\Html\FormFacade;
use Collective\Html\HtmlFacade;
use Illuminate\Support\Facades\Input;
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
        if($filter = Input::get('Speciality')) {
            $queryDoctor->where('specialities.name', '=', $filter);
        }
        $doctors = $queryDoctor->paginate(4);
        if(isset($filter)) {
            $doctors->appends('filter', $filter);
        }

        $specialities = Speciality::all();

      return view('admin.doctor.list',compact('doctors','specialities'));
    }

    public function create(){
        $specialities = Speciality::all();
        return view('admin.doctor.add',compact('specialities'));
    }
    public function store(){
        dd(request()->all());
        return request()->all();
    }
}
