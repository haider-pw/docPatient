<?php

namespace App\Http\Controllers\Admin;
use App\Child;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ChilldrenController extends Controller
{
    public function index(){
        $children = Child::all();
        return view('admin.child.list',compact('children'));
    }
}
