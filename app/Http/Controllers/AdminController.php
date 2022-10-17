<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\User;
use App\Models\SellingDetails;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function email()
    {
        return view('auth.passwords.email');
    }

    public function view_adminDash_page()
    {
        $data = Product::all();
        return view('admin.AdminDash',compact('data'));
    }
  
    public function crypto_address()
    {
        $data = SellingDetails::all();
        return view('admin.crypto_address',compact('data'));
    }

    public function admin_edit_address($id)
    {   $data = SellingDetails::find($id);
        return view('admin.AdminEditAddress',compact('data'));
    }

    public function update_address(Request $rqs){
        $now = Carbon::now();

        $address = SellingDetails::find($rqs->id);

        $address->bitcoin_address=$rqs->bitcoin_address; 
        $address->bitcoin_cash_address=$rqs->bitcoin_cash_address; 
        $address->litecoin_address=$rqs->litecoin_address; 
        $address->etheruem_address=$rqs->etheruem_address;
        $address->updated_at=$now;
        $address->save();
        Alert::toast('Address Updated Successfully','success');
        return redirect('crypto_address');
       
    
    }

    public function admin_change_pass($id)
    {   $data = User::find(Auth::user()->id);
        return view('admin.AdminChangePassword',compact('data'));
    }


    public function update_admin_pass(Request $req){
        $now = Carbon::now();

        $data = User::find(Auth::user()->id);
        $data->password=Hash::make($req->password);
        $data->updated_at=$now;
        if($req->password == $req->confirm_pass) 
        {
            $data->save();
            Alert::toast('Password Changed Successful','success');
            return redirect('/AdminDash');
        }
        else{
            Alert::toast('Password Not Matched','fail');
            return redirect()->back();
        }
        }

  
}
