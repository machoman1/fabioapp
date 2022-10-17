<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png"  href="{{ asset('image/1a.png') }}">

        <title>cryptonet</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
       
    </head>
    <body class="antialiased">
    <div class="row pt-5">
            <div class="col-sm-4">
                
            </div>

            <div class="col-sm-4 login_form">
                <div id="card" class="card">
                    <h1>Crypto Net</h1>
                    <div class="image">
                    <img src="image/1a.png" alt="logo" style="width:150px;height:150px">
                    </div><br>
                    <h5 style="text-align:center;font-size:25px;font-family: 'Montserrat', sans-serif;color:#008080">Login</h5>
                    <form method="POST" action="{{ route('login') }}">
                    @csrf
                        <div class="row">
                            <input type="email" name="email" id="email" class="form__input" placeholder="Email" autocomplete="off"  required>
                        </div>

                        <div class="row">
                            <input type="password" name="password" id="password" class="form__input" placeholder="Password" required>
                        </div>
                        <a style="all:unset;color:blue;text-decoration:underline;cursor:pointer;text-align: center;" href="email">Forgot Password</a>

                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6">
                            <input type="submit" value="Login" class="btn">
                            <div class="col-sm-3"></div>
                            </div>
                        </div>

                       <div class="row">
                       <div class="col-sm-1"></div>
                            <div class="col-sm-5">
                            <label>
                                <a style="all:unset;color:blue;text-decoration:underline;font-family: 'Montserrat', sans-serif;color:#008080">Dont have account?</a>
                            </label> 
                            </div>
                            
                            <div class="col-sm-5">
                            <label>
                                <a style="all:unset;font-family: 'Montserrat', sans-serif;color:#008080;cursor:pointer" href="register"> Create an Account</a>
                            </label> 
                            </div>
                            <div class="col-sm-2"></div>
                       </div>

                    </form>
                </div>
            </div>


            <div class="col-sm-4">
                
            </div>
        </div>
        @include('sweetalert::alert')
    </body>
</html>
