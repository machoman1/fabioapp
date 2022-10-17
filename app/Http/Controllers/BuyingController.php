<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use App\Models\Buying;
use App\Models\CurrencyConversion;
use App\Models\PaymentDetails;
use Illuminate\Http\Request;
use Carbon\Carbon;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;


class BuyingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
     //buying 
     public function buying(){
        $data = Product::all();
        $data_currency = CurrencyConversion::all();
        $data_payment = PaymentDetails::all();
        return view('buy.buying',compact('data','data_currency','data_payment'));
    }


    public function save_buying(Request $rqs)
    {    
        $now = Carbon::now();
        $buying = new Buying;

        $buying->user_id = Auth::user()->id;
        $buying->crypto_type = $rqs->crypto_type;
        $buying->amount_needed = $rqs->amount_needed;
        $buying->amount_paying = $rqs->amount_paying;
        $buying->crypto_address = $rqs->crypto_address;
        $buying->new_total=$rqs->new_total_save;

        $buying->created_at=$now;

        $buying->save();

        Alert::toast('Order Placed Successful','success');
        return redirect('UserDash');
    }    
    public function buying_currency_conv()
    {
        $data = CurrencyConversion::all();
        return view('currency.buying_currency_conversion',compact('data'));
    }
    public function admin_edit_buying_currency_conv($id)
    {   $data = CurrencyConversion::find($id);
        return view('currency.AdminEditBuyingCurrency',compact('data'));
    }
    public function update_buying_currency_conv(Request $rqs){
        $now = Carbon::now();

        $address = CurrencyConversion::find($rqs->id);

        $address->dollars=$rqs->dollars; 
        $address->bitcoin=$rqs->bitcoin; 
        $address->etherom=$rqs->etherom; 
        $address->litecoin=$rqs->litecoin;
        $address->bitcoinCash=$rqs->bitcoinCash;
        $address->fee=$rqs->fee;
        $address->updated_at=$now;
        $address->save();
        Alert::toast('Currency Updated Successfully','success');
        return redirect('buying_currency_conversion');
    }
}
