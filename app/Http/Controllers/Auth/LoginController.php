<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Carbon\Carbon;
use App\Models\User;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        $now = Carbon::now();
        $input = $request->all();
      
        $request->validate([
            
            'email'=>'required|email',
            'password'=>'required|string',
        ]);

        $fieldType = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'email';
        $email =$request->email;
        $password =$request->password;

       if(auth()->attempt(array($fieldType => $input['email'], 'password' => $input['password'])))
       {    
            Auth::user()->last_login = $now;
            Auth::user()->user_ip =$request->getClientIp();
            Auth::user()->save();

            if(Auth::user()->role_as =='1')
            {
                    Alert::toast('Login Successfully','success');
                    return redirect('/AdminDash');
            }

            if(Auth::user()->role_as =='0')
            {
                    Alert::toast('Login Successfully','success');
                    return redirect('/UserDash');
            }

        }
                Alert::toast('Wrong Credentials','info');
                return redirect()->back();
}

}
