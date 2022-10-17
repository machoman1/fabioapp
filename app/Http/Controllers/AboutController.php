<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function view_about_page(){
        return view('aboutPage.about');
    }
}
