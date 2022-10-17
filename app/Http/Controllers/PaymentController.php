<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\PaymentDetails;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

class PaymentController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function payment()
    {
        $data = PaymentDetails::all();
        return view('payment.payment',compact('data'));
    }
    public function admin_edit_payment($id)
    {   $data = PaymentDetails::find($id);
        return view('payment.AdminEditPayment',compact('data'));
    }

    public function update_payment(Request $rqs){
        $now = Carbon::now();

        $address = PaymentDetails::find($rqs->id);

        $address->momo_account_name=$rqs->momo_account_name; 
        $address->momo_account_number=$rqs->momo_account_number; 
        $address->bank_account_name=$rqs->bank_account_name; 
        $address->bank_account_number=$rqs->bank_account_number;
        $address->bank_name=$rqs->bank_name;
        $address->bank_branch=$rqs->bank_branch;
        $address->updated_at=$now;
        $address->save();
        Alert::toast('Payment Updated Successfully','success');
        return redirect('payment');
    }
}
