<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png"  href="{{ asset('image/1a.png') }}">

        <title>cryptonet</title>

        <!-- Fonts -->
        <!-- <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->
        <!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->
        <!-- <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet"> -->
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>



        <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/min.css') }}" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body class="antialiased">
    <div class="m-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <div style="font-family: 'Montserrat', sans-serif;color:#008080;padding-right:20px"> <img src="image/1b.jpg" alt="image" class="pl-2" height=80 width=80><span style="padding-left:10px">CryptoNet</span></div>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                    <a style="padding-left:30px;font-size:18px;color:blue" href="{{route('view_welcome_page')}}" class="nav-item nav-link active">Home</a>
                    <a style="padding-left:30px;font-size:18px;" href="{{route('view_buy_page')}}" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#7F7384'" class="nav-item nav-link">Buy</a>
                    <a style="padding-left:30px;font-size:18px;" href="{{route('view_sell_page')}}" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#7F7384'" class="nav-item nav-link">Sell</a>
                    <a style="padding-left:30px;font-size:18px;" href="{{route('view_about_page')}}" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#7F7384'" class="nav-item nav-link">About</a>
                    <a style="padding-left:30px;font-size:18px;" href="{{route('view_support_page')}}" onMouseOver="this.style.color='blue'" onMouseOut="this.style.color='#7F7384'" class="nav-item nav-link">Support</a>
                </div>
                <div class="navbar-nav ms-auto">
                    <a style="padding-right:30px;font-size:18px;color:blue" href="#"  class="nav-item nav-link">Login</a>
                    <a style="padding-left:30px;font-size:18px;background-color: #6633fd;color:white;border-radius: 20px;border: none;outline: none;font-weight: 600;transition: all 0.5s ease;" href="#" class="nav-item nav-link"><span style="padding-right:15px;text-align:center">Get Started</span></a>
                </div>
            </div>
        </div>
    </nav>
</div>

@yield('content') 


     <!-- foter -->

     <div class="footer-clean">
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-4 col-md-3 item">
                        <h3 style="font-family:'Montserrat', sans-serif;">Services</h3>
                        <ul>
                            <li><a href="#">Buying Cryptocurrencies</a></li>
                            <li><a href="#">Selling Cryptocurrencies</a></li>
                            <li><a href="#">Cryptocurrencies Consult</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3 style="font-family:'Montserrat', sans-serif;">Company</h3>
                        <ul>
                            <li><a href="#"></a>About</li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Team</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4 col-md-3 item">
                        <h3 style="font-family:'Montserrat', sans-serif;">Contacts</h3>
                        <ul>
                            <li><a href="https://mail.google.com/">Email:saktsolution@gmail.com</a></li>
                            <li><a href="#">Office Line: +233 0542199853</a></li>
                            <li><a href="#">Phone: +233 0542039395</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-3 item social"><a href="#"><ion-icon name="logo-facebook"></ion-icon></a><a href="#"><ion-icon name="logo-whatsapp"></ion-icon></a><a href="#"><ion-icon name="logo-twitter"></ion-icon></a><a href="#"><ion-icon name="logo-google"></ion-icon></i></a>
                        <p class="copyright">AfricanNameDictionary © 2022</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
<style>     
/* foter */
.footer-clean {
  padding:50px 0;
  background-color:white;
  color:black;
}

.footer-clean h3 {
  margin-top:0;
  margin-bottom:12px;
  font-weight:bold;
  font-size:16px;
}

.footer-clean ul {
  padding:0;
  list-style:none;
  line-height:1.6;
  font-size:14px;
  margin-bottom:0;
}

.footer-clean ul a {
  color:inherit;
  text-decoration:none;
  opacity:0.8;
}

.footer-clean ul a:hover {
  opacity:1;
}

.footer-clean .item.social {
  text-align:right;
}

@media (max-width:767px) {
  .footer-clean .item {
    text-align:center;
    padding-bottom:20px;
  }
}

@media (max-width: 768px) {
  .footer-clean .item.social {
    text-align:center;
  }
}

.footer-clean .item.social > a {
  font-size:24px;
  width:40px;
  height:40px;
  line-height:40px;
  display:inline-block;
  text-align:center;
  border-radius:50%;
  border:1px solid #ccc;
  margin-left:10px;
  margin-top:22px;
  color:inherit;
  opacity:0.75;
}

.footer-clean .item.social > a:hover {
  opacity:0.9;
}

@media (max-width:991px) {
  .footer-clean .item.social > a {
    margin-top:40px;
  }
}

@media (max-width:767px) {
  .footer-clean .item.social > a {
    margin-top:10px;
  }
}

.footer-clean .copyright {
  margin-top:14px;
  margin-bottom:0;
  font-size:13px;
  opacity:0.6;
}

 </style>
        @include('sweetalert::alert')

    </body>
</html>
