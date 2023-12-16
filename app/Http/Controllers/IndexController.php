<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Doctor;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $doctors = Doctor::whereStatus(true)->get();
        $blogs = Blog::whereStatus(true)->latest()->limit(3)->get();

        return view('visitors.index',compact('doctors','blogs'));
    }
}
