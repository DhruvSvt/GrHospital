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
}
