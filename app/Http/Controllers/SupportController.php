<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupportController extends Controller
{
    //
    public function view_support_page(){
        return view('supportPage.support');
    }
}
