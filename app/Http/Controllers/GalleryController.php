<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index(){

        $gallery = Gallery::whereStatus(true)->orderBy('ordering')->get();
        return view('visitors.gallery',compact('gallery'));
    }
}
