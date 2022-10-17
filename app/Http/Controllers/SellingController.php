<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\SellingDetails;
use App\Models\CurrencyConversionSelling;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Selling;
use App\Models\CurrencyConversion;
use App\Models\PaymentDetails;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class SellingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

     //selling 
     public function selling(){
        $data = Product::all();
        $data_currency = CurrencyConversionSelling::all();
        $data_address = SellingDetails::all();
        return view('sell.selling',compact('data','data_currency','data_address'));
    }
    
    public function save_selling(Request $rqs)
    {    
        $now = Carbon::now();
        $selling = new Selling;

        $selling->user_id = Auth::user()->id;
        $selling->amount_selling = $rqs->amount_needed;
        $selling->amount_to_pay = $rqs->amount_paying_hidden;
        $selling->crypto_type = $rqs->crypto_type;
        $selling->crypto_address = $rqs->crypto_address_save;
        $selling->total_amount_to_pay=$rqs->new_total_save;

        $selling->momo_account_name=$rqs->momo_name;
        $selling->momo_account_number=$rqs->momo_number;
        $selling->bank_account_name=$rqs->bank_account_name;
        $selling->bank_account_number=$rqs->bank_account_number;
        $selling->bank_branch=$rqs->bank_branch;
        $selling->bank_name=$rqs->bank_name;

        $selling->created_at=$now;

        $selling->save();

        Alert::toast('Order Placed Successful','success');
        return redirect('UserDash');
    } 

  
    public function selling_currency_conv()
    {
        $data = CurrencyConversionSelling::all();
        return view('currency.selling_currency_conversion',compact('data'));
    }
    public function admin_edit_selling_currency_conv($id)
    {   $data = CurrencyConversionSelling::find($id);
        return view('currency.AdminEditSellingCurrency',compact('data'));
    }
    public function update_selling_currency_conv(Request $rqs){
        $now = Carbon::now();

        $address = CurrencyConversionSelling::find($rqs->id);

        $address->dollars=$rqs->dollars; 
        $address->bitcoin=$rqs->bitcoin; 
        $address->etherom=$rqs->etherom; 
        $address->litecoin=$rqs->litecoin;
        $address->bitcoinCash=$rqs->bitcoinCash;
        $address->fee=$rqs->fee;
        $address->updated_at=$now;
        $address->save();
        Alert::toast('Currency Updated Successfully','success');
        return redirect('selling_currency_conversion');
    }
}
