<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use DB;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //
    public function register_users(Request $rqs)
    {    
        $now = Carbon::now();

        $user = new User;

        $user->name=$rqs->name;
        $user->email=$rqs->email;
        $user->phone=$rqs->phone;
        $user->password=Hash::make($rqs->password);
        $user->role_as='0';
        $user->created_at=$now;
        $user->updated_at=$now;
        if($rqs->confirm_password != $rqs->password){
            Alert::toast('Password Does not Macth','info');
            return redirect()->back();
        }

        $user->save();
        Alert::toast('Registration Successfully','success');
        return redirect('login');
    }
}
