<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\SellingDetails;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;


class ProductController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function product()
    {
        $data = Product::all();
        return view('product.product',compact('data'));
    }
    public function admin_edit_product($id)
    {   $data = Product::find($id);
        return view('product.AdminEditProduct',compact('data'));
    }
    public function update_product(Request $rqs){
        $now = Carbon::now();

        $address = Product::find($rqs->id);

        $address->name=$rqs->name; 
        $address->price=$rqs->price; 
        $address->change_arrow=$rqs->change_arrow; 
        $address->change_value=$rqs->change_value;
        $address->status=$rqs->status;
        $address->updated_at=$now;
        $address->save();
        Alert::toast('Product Updated Successfully','success');
        return redirect('product');
    }
}
