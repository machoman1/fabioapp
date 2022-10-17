<?php

namespace App\Http\Controllers;
use App\Models\Buying;
use App\Models\Selling;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;


class OrderController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function user_view_orders_sell()
    {
        $data_buying = Buying::all();
        $data_selling = Selling::all();
        return view('order.user_order_sell',compact('data_selling','data_buying'));
    }

    public function user_view_orders_buy()
    {
        $data_buying = Buying::all();
        $data_selling = Selling::all();
        return view('order.user_order_buy',compact('data_selling','data_buying'));
    }

    public function admin_view_orders_sell()
    {
        $data_buying = Buying::all();
        $data_selling = Selling::all();
        return view('admin.admin_order_sell',compact('data_selling','data_buying'));
    }

    public function admin_get_order_sell($id)
    {   $data = Selling::find($id);
        return view('admin.admin_get_order_sell',compact('data'));
    }

    public function admin_view_orders_buy()
    {
        $data_buying = Buying::all();
        $data_selling = Selling::all();
        return view('admin.admin_order_buy',compact('data_selling','data_buying'));
    }
  
    public function admin_edit_buy($id)
    {   $data = Buying::find($id);
        return view('admin.AdminEditBuy',compact('data'));
    }

    public function update_order_buy(Request $rqs){
        $now = Carbon::now();

        $buying = Buying::find($rqs->id);

        $buying->status=$rqs->status; 
        $buying->updated_at=$now;
        $buying->save();
        Alert::toast('Status Updated Successfully','success');
        return redirect('admin_order_buy');
       
    
    }
    public function admin_edit_sell($id)
    {   $data = Selling::find($id);
        return view('admin.AdminEditSell',compact('data'));
    }

    public function update_order_sell(Request $rqs){
        $now = Carbon::now();

        $selling = Selling::find($rqs->id);

        $selling->status=$rqs->status; 
        $selling->updated_at=$now;
        $selling->save();
        Alert::toast('Status Updated Successfully','success');
        return redirect('admin_order_sell');
       
    
    }


    //public function view_sell($id)
    //{
    // $data = Selling::find($id);
    // return view('order.user_view_sell',compact('data'));
    //}
}
