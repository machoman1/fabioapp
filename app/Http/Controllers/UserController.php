<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\buySellRateBitcoin;
use App\Models\buySellRateEtherom;
use App\Models\buySellRateLitcoin;
use App\Models\buySellRateBitcoinCash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    //
    public function view_userDash_page()
    {
        $data_bitcoin = buySellRateBitcoin::all();
        $data_etherom = buySellRateEtherom::all();
        $data_litecoin = buySellRateLitcoin::all();
        $data_bitcoin_cash = buySellRateBitcoinCash::all();
        return view('users.UserDash',compact('data_bitcoin','data_etherom','data_litecoin','data_bitcoin_cash'));
    }
    public function admin_view_users()
    {
        $data = User::all();
        return view('users.viewUsers',compact('data'));
    }
    public function view_user_account()
    {
        $data = User::all();
        return view('users.user_account',compact('data'));
    }

    public function update_user_account(Request $rqs)
    {
         $now = Carbon::now();
 
         $data = User::find($rqs->Auth::user()->id);
         $data->name=$rqs->name; 
         $data->email=$rqs->email; 
         $data->phone=$rqs->phone; 
         $data->updated_at=$rqs->now; 

         $data->save(); 
         Alert::toast('Reacord Updated Successfully','success');
         return redirect()->back();
 
      }

      public function change_pass($id)
      {   $data = User::find(Auth::user()->id);
          return view('users.UserChangePassword',compact('data'));
      }

      
    public function update_user_pass(Request $req){
        $now = Carbon::now();

        $data = User::find(Auth::user()->id);
        $data->password=Hash::make($req->password);
        $data->updated_at=$now;
        if($req->password == $req->confirm_pass) 
        {
            $data->save();
            Alert::toast('Password Changed Successful','success');
            return redirect('/UserDash');
        }
        else{
            Alert::toast('Password Not Matched','fail');
            return redirect()->back();
        }
        }

        public function admin_edit_users($id)
        {   $data = User::find($id);
            return view('users.AdminEditUser',compact('data'));
        }

         //update users functionm
    public function update_users_data(Request $rqs){
        $now = Carbon::now();

        $users = User::find($rqs->id);

       
        $users->name=$rqs->name; 
        $users->email=$rqs->email; 
        $users->password=Hash::make($rqs->password);
        $users->role_as=$rqs->role_as;
        $users->phone=$rqs->phone; 
        $users->updated_at=$now;
          if($rqs->password == $rqs->confirm_password){
              $users->save();
              Alert::toast('User Updated Successfully','success');
              return redirect('viewUsers');
          }
          else{
              Alert::toast('Password Not Matched ',' info');
              return redirect()->back();
          }
    
    }

    public function admin_get_user($id)
    {   $data = User::find($id);
        return view('users.admin_get_user',compact('data'));
    }
  

   

  
}
