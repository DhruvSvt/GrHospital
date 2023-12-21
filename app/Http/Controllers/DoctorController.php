<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function doctor_detail($id){
        $doctor = Doctor::findOrFail($id);
        return view('visitors.doctor-single',compact('doctor'));
    }

    public function show (){
        $doctors = Doctor::whereStatus(true)->latest()->paginate(3);
        return view('visitors.doctor',compact('doctors'));
    }

    public function doctor_list(){
        return view('visitors.doctor-list');
    }
}
