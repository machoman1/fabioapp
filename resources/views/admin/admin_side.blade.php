<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/png"  href="{{ asset('image/1a.png') }}">

        <title>cryptonet</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/min.css') }}" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">


       
    </head>
    <body class="antialiased">
    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
        <div class="header">
            <div style="text-align:center"><img src="image/1a.png" height=80 width=80 style="display: block;margin-left: auto;margin-right: auto;" "></div>
            <br>
            <h3 style="text-align:center;padding-buttom:5px;font-family: 'Montserrat', sans-serif;color:#008080;font-size:25px">{{Auth::user()->name}}<h3>

            <a style="font-family: 'Montserrat', sans-serif;color:#008080" title="dashboard" class="active" href="AdminDash"><i class="fa fa-tachometer"></i> Dashboard</a>

            <a style="font-family: 'Montserrat', sans-serif;color:#008080" title="Users" href="viewUsers"><i class="fa fa-users" aria-hidden="true"></i> Users</a>

            <a style="font-family: 'Montserrat', sans-serif;color:#008080" class="dropdown-btn" title="Settings"><i class="fa fa-clock-o" aria-hidden="true"></i> Orders<i style="float: right;padding-right: 10px;" class="fa solid fa-plus"></i></a>
            <div style="display: none;">
                    <a style="font-family: 'Montserrat', sans-serif;color:#008080" href="admin_order_sell" title="sold crypto"><i class="fa fa-shopping-basket"></i> Sold Orders</a>
                    <a style="font-family: 'Montserrat', sans-serif;color:#008080" href="admin_order_buy" title="bought crypto"><i class="fa fa-shopping-cart"></i> Bought Orders</a>
                </div>

                <a style="font-family: 'Montserrat', sans-serif;color:#008080" href="crypto_address" title="address"><i class="fa fa-shopping-basket"></i> Crypto Address</a>
                <a style="font-family: 'Montserrat', sans-serif;color:#008080" href="product" title="product"><i class="fa fa-product-hunt"></i> Products</a>
                <a style="font-family: 'Montserrat', sans-serif;color:#008080" href="payment" title="payment"><i class="fa fa-money"></i> Payment</a>


                <a style="font-family: 'Montserrat', sans-serif;color:#008080" class="dropdown-btn" title="currency"><i class="fa fa-btc" aria-hidden="true"></i> Currency<i style="float: right;padding-right: 10px;" class="fa solid fa-plus"></i></a>
            <div style="display: none;">
                    <a style="font-family: 'Montserrat', sans-serif;color:#008080" href="selling_currency_conversion" title="currency conversion"><i class="fa fa-eur"></i> Selling Currency Conversion</a>
                    <a style="font-family: 'Montserrat', sans-serif;color:#008080" href="buying_currency_conversion" title="currency conversion"><i class="fa fa-usd"></i> Buying Currency Conversion</a>
                </div>


            <a style="font-family: 'Montserrat', sans-serif;color:#008080" class="dropdown-btn" title="Settings"><i class="fa fa-cog" aria-hidden="true"></i> Settings<i style="float: right;padding-right: 10px;" class="fa solid fa-plus"></i></a>
            <div style="display: none;">
                    <!-- <a style="font-family: 'Montserrat', sans-serif;color:#008080" href="admin_roles" title="Roles"><i class="fa fa-user"></i> Roles</a> -->
                    <!-- <a style="font-family: 'Montserrat', sans-serif;color:#008080" href="department" title="Department Head"><i class="fa fa-building"></i> Department</a> -->
                    <a style="font-family: 'Montserrat', sans-serif;color:#008080" href="AdminChangePassword/{Auth::user()->id}" title="New Password"><i class="fa fa-key"></i> Change Password</a>
                    

                </div>
            <a style="font-family: 'Montserrat', sans-serif;color:#008080" title="users system log" href="system_log"><i class="fa fa-sign-out aria-hidden="true"></i> System Log</a>


        </div>
    </div>





    <div id="main">
    <div class="topbar">
      
            <button class="openbtn" onclick="openNav()">&#9776;</button>
            
                <div class="search">
                    <label>
                        <input type="text" placeholder="Search Here">
                        <ion-icon name="search-outline"></ion-icon>
                    </label>
                </div>

                    <div class="user">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcReambZ_BAMzI5RRq8InMIRI8LpTchUZxLZ74zTOX56oag1LO6SvR8l9NgiZwvoKINYhZ8&usqp=CAU">
                    </div>
            
            <a class="btn" href="{{ route('logout') }}"onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
    
    </div>
       
  @yield('content')
</div>
        
        
     
        @include('sweetalert::alert')
        <script>
  var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

/* Set the width of the sidebar to 0 and the left margin of the page content to 0 */
function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
}
</script>
    </body>
</html>
