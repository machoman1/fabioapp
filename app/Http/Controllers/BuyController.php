<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\CurrencyConversion;
use Illuminate\Http\Request;
class BuyController extends Controller
{
  

    //
    public function view_buy_page(){
        return view('buyPage.buy');
    }

      
}


