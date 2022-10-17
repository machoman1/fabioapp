<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\CurrencyConversion;

use Illuminate\Http\Request;

class SellController extends Controller
{
  
    //
    public function view_sell_page(){
        return view('sellPage.sell');
    }
    
}

