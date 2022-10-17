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
                    <!-- <a style="padding-left:30px;font-size:18px;" href="#" class="nav-item nav-link disabled" tabindex="-1">Reports</a> -->
                </div>
                <div class="navbar-nav ms-auto">
                    <a style="padding-right:30px;font-size:18px;color:blue" href="{{route('login')}}"  class="nav-item nav-link">Login</a>
                    <a style="padding-left:30px;font-size:18px;background-color: #6633fd;color:white;border-radius: 20px;border: none;outline: none;font-weight: 600;transition: all 0.5s ease;" href="{{route('register')}}" class="nav-item nav-link"><span style="padding-right:15px;text-align:center">Get Started</span></a>
                </div>
            </div>
        </div>
    </nav>
</div>

    <div class="container"><br><br><br><br>
        <div class="row">
            <div class="col-md-6">
                <h1 style="font-size:70px">Buy and sell digital</h1>
                <h1 style="font-size:70px">currencies</h1><br><br>

                <h3>Buy and Sell cryptocurrencies directly<h3>
                <h3>in <img src="https://www.kindpng.com/picc/m/241-2417436_round-ghana-flag-hd-png-download.png" width=30 height=30> with ease.</h3><br>
                <div class="col-md-4">
                <a style="padding-left:30px;font-size:20px;background-color: #6633fd;color:white;border-radius: 20px;border: none;outline: none;font-weight: 600;transition: all 0.5s ease;" href="{{route('register')}}" class="nav-item nav-link"><span style="padding-left:20px;text-align:center">Get Started</span></a><br><br>
                </div>

            </div>
            <div class="col-md-6">
            <!-- <img style="border-radius:30px;" src="https://media.istockphoto.com/vectors/bitcoin-cryptocurrency-in-futuristic-graphic-concept-vector-id1254500314?k=20&m=1254500314&s=612x612&w=0&h=PJ0OTeg5qrVbq2_dXJDskhJTUGamVMv2tPYZV6yqi-8=" alt="image" width=100%"> -->
            <img style="border-radius:30px;" src="image/1c.png" alt="image" width=100%">   
        </div>
        </div>
    </div>



    <div class="container"><br><br><br><br>
        <div class="row">
            <h3 style="text-align:center">We Are Always Here For You!</h3>
            <div class="col-sm-2"></div>
            <div class="col-sm-3">
            <div class="card1">
                    <div class="stat-widget-one">
                        <div style="color:green"  class="stat-icon dib"><ion-icon size="large" name="help-circle-outline"></ion-icon></div>
                            <div class="stat-content dib">
                            <h3 style="color: grey;font-size: 20px;text-align:center;">24/7 Humble Support</h3>
                            <p style="text-align:center;">Encounter Any Problem? Give us a Call</p>
                            <!-- <div style="color: grey;font-size: 20px;text-align:center;padding-bottom:30px;font-weight:bold" class="stat-text">Great user experience</div> -->
                            <!-- <div style="text-align:center;padding-bottom:20px" class="stat-dig">Use user friendly CryptoNet</div> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
            <div class="card1">
                    <div class="stat-widget-one">
                        <div style="color:blue" class="stat-icon dib"><ion-icon size="large" name="accessibility-outline"></ion-icon></div>
                            <div class="stat-content dib">
                            <h3 style="color: grey;font-size: 20px;text-align:center;">Great user experience</h3>
                            <p style="text-align:center;">Use user friendly CryptoNet</p>
                            <!-- <div style="color: grey;font-size: 20px;text-align:center;padding-bottom:30px;font-weight:bold" class="stat-text">Great user experience</div> -->
                            <!-- <div style="text-align:center;padding-bottom:20px" class="stat-dig">Use user friendly CryptoNet</div> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
            <div class="card1">
                    <div class="stat-widget-one">
                        <div style="color:blue" class="stat-icon dib"><ion-icon size="large" name="prism-outline"></ion-icon></div>
                            <div class="stat-content dib">
                            <h3 style="color: grey;font-size: 20px;text-align:center;">Lower Risk</h3>
                            <p style="text-align:center;">Money Back Guarantee, Tried-and-True</p>
                            <!-- <div style="color: grey;font-size: 20px;text-align:center;padding-bottom:30px;font-weight:bold" class="stat-text">Great user experience</div> -->
                            <!-- <div style="text-align:center;padding-bottom:20px" class="stat-dig">Use user friendly CryptoNet</div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
        </div><br><br><br>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
                <div class="col-sm-10">
                <div class="card-body">
             <div class="table-responsive">
                <table id="mydTable" class="table table-striped table-boardered nowrap" style="width:100%">
                <thead>
                    <tr style="color:#7F7384;font-size: 15px;opacity:0.4">
                            <th>PRODUCT</th>
                            <th>CHART</th>
                            <th>PRICE</th>
                            <th>CHANGE</th>
                            <th>ACTIONS</th>
                    </tr>
                </thead>
                    @foreach($data as $data)
                    <tbody>
                        <tr>
                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                            <div style="font-family: 'Montserrat', sans-serif;color:#008080;padding-right:20px"> <img style="border-radius:10px" src="{{$data->product_logo}}" alt="image" height=30  width=30><span style="padding-left:10px;font-weight:bold">{{$data->name}} </span><span style="font-size:10px">{{$data->abbreviation}}</span></div>
                            </div>
                        </td>

                        <td> <img src="{{$data->chart}}" style="width:50px;height:50px;"></td>

                        <td style="font-weight:bold">{{$data->price}}</td>

                        <td class="px-4 py-3">
                            <div class="flex items-center text-sm">
                            <div  style="color:#1fd655"> <ion-icon name="arrow-{{$data->change_arrow}}-outline"></ion-icon><span style="font-size:20px;color:#008631">{{$data->change_value}}</span></div>
                            </div>
                        </td>
                        @if($data->status == 'active')
                        <td >
                        <a style="font-weight:bold;width:100px;height:40px;" class="btn card" href = '#'>
                            Buy
                        </a>

                        <a style="font-weight:bold;width:100px;height:40px" class="btn card" href = '#'>
                           Sell
                        </a>
                        </td>
                        @else
                        <td style="font-weight:bold;font-family: 'Montserrat', sans-serif;color:#008080">Comming Soon</td>
                        @endif
                        </tr>
                    </tbody>
                    @endforeach

                    </table>
             </div>
        </div>
                </div>
            <div class="col-sm-2"></div>
        </div>
    </div><br><br><br><br><br><br>

        
    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <h3 style="text-align:center;font-size:35px">The <span style="color:blue">best</span> experience always. You mean the most to us</h3>
                <h5 style="text-align:center;color:#008080">CryptoNet has all these features for your comfort</h5>
            </div>
            <div class="col-sm-2"></div>
        </div>
    </div><br><br><br><br>

    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                 <img src="image/phone.jpg" width=100% style="">
            </div>

            <div  class="col-sm-4"><br><br><br>
            <div style="background-color:#0080ff" class="flex items-center text-sm "><br>
                <div style="font-family: 'Montserrat', sans-serif;color:white;padding-right:20px"> <img style="border-radius:10px" src="image/mobile-apps.svg" alt="image" height=30 width=30><span style="padding-left:10px;font-weight:bold">Mobile Apps</span></div>
                <span style="color:aqua;font-size:16px;font-family: 'Montserrat', sans-serif">Perform your buy and sell transactions on the go with our Android and ios apps!</span>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                 <img src="image/bulk.jpg" width=100% style="">
            </div>

            <div  class="col-sm-4"><br><br><br>
            <div style="" class="flex items-center text-sm "><br>
                <div style="font-family: 'Montserrat', sans-serif;color:black;padding-right:20px"> <img style="border-radius:10px" src="image/bulk-buy.svg" alt="image" height=30 width=30><span style="padding-left:10px;font-weight:bold">Bulk Buy</span></div>
                <span style="color:black;font-size:16px;font-family: 'Montserrat', sans-serif">Buy in bulk at rates made just for you. Continue to serve your customers with ease!</span>
                </div>
            </div>
        </div>
    </div>



    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                 <img src="image/buy.jpg" width=100% style="">
            </div>

            <div  class="col-sm-4"><br><br><br>
            <div style="background-color:#0080ff" class="flex items-center text-sm "><br>
                <div style="font-family: 'Montserrat', sans-serif;color:white;padding-right:20px"> <img style="border-radius:10px" src="image/buy-pay.svg" alt="image" height=30 width=30><span style="padding-left:10px;font-weight:bold">Buy And Pay</span></div>
                <span style="color:aqua;font-size:16px;font-family: 'Montserrat', sans-serif">Buy your crypto directly just by entering payment details. It's fast and convenient.</span>
                </div>
            </div>
        </div>
    </div><br><br><br>
    



    <div class="container">
        <div class="row">
            <div class="col-sm-2"></div>
            <div class="col-sm-6">
                 <h3>Perform your first </h3>
                 <h3>transaction on <span style="color:blue">CryptoNet</span></h3>
                 <h3> easily</h3>
                 <ul style="color:#008080;font-size:20px;font-family: 'Montserrat', sans-serif">
                    <li>Sign Up</li>
                    <li>Login</li>
                    <li>Place Order (Buy Or Sell)</li>
                    <li>Recieve Order</li>
                 </ul>
                 <a style="width:200px;padding-left:30px;font-size:20px;background-color: #6633fd;color:white;border-radius: 20px;border: none;outline: none;font-weight: 600;transition: all 0.5s ease;" href="buying" class="nav-item nav-link"><span style="padding-left:20px;text-align:center">Order Now!</span></a><br><br>
            </div>

            <div  class="col-sm-4"><br><br><br>
              <img src="https://www.stilt.com/wp-content/uploads/2022/03/1-1024x576.png" width=100% style="">

            </div>
        </div>
    </div>


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
.navbar {
   position: fixed;
  top: 0;
  width: 100%;
  overflow: hidden; 
 
}



 </style>
        @include('sweetalert::alert')

    </body>

</html>
