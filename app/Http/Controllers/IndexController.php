<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $doctors = Doctor::whereStatus(true)->get();


        return view('visitors.index',compact('doctors'));
    }
}
