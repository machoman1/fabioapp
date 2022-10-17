@extends('users.user_side')
@section('content')
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<br><br>
<body onload="page()">
<div class="content-wrap">
<form method="POST" action="/buying">
    @csrf
    @foreach($data_currency as $currency)
    @endforeach
    <input id="dollar" type="text" hidden value="{{$currency->dollars}}"{{$currency->dollars}}>
    <input id="bitcoin" type="text" hidden value="{{$currency->bitcoin}}"{{$currency->bitcoin}}>
    <input id="etherom" type="text" hidden value="{{$currency->etherom}}"{{$currency->etherom}}>
    <input id="litecoin" type="text" hidden value="{{$currency->litecoin}}"{{$currency->litecoin}}>
    <input id="bitcoinCash" type="text" hidden value="{{$currency->bitcoinCash}}"{{$currency->bitcoinCash}}>
    <input id="fee" type="text" hidden value="{{$currency->fee}}"{{$currency->fee}}>
        <div class="row">
            
            <div class="col-sm-6 card">

                <label style=" margin-bottom: 1px; display: block;" for="contact">Buying</label>
                <select style="width:50%" type="text" name="crypto_type" id="crypto_type" class="form__input" placeholder="Country" required>
                <option value="">Select Crypto</option>
                @foreach($data as $values)
                <option value="{{$values->name}}">{{$values->name}}  {{$values->abbreviation}}</option>
                @endforeach
                </select>

                <div class="row">
                    <div class="col-sm-4">
                    <div class="card">
                            <label style=" margin-bottom: 1px; display: block;" for="contact">Amount You Need</label>
                            <input onchange="myFunction()" type="number" name="amount_needed" id="amount_needed" class="form__input" placeholder="100.00" value="{{ old('phone') }}" required>
                            <img src="https://etc.usf.edu/clipart/72500/72519/72519_28_us_c_lg.gif" width=30 height=30>USD
                        </div>
                    </div>
                    <div class="col-sm-4">
                    <div style="" class="card"><span style="float:left">1 USD ~ {{$currency->dollars}} GHS</span></div>
                    </div>
                    <div class="col-sm-4">
                    <div class="card">
                            <label style=" margin-bottom: 1px; display: block;" for="contact">Amount You Pay</label>
                            <input hidden type="number" name="amount_paying" id="amount_paying" class="form__input" placeholder="500.00" value="{{ old('phone') }}" required>
                            <input disabled type="number" name="amount_paying_hidden" id="amount_paying_hidden" class="form__input" placeholder="500.00" value="{{ old('phone') }}" required>

                            GHS
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Flag_of_Ghana.svg/255px-Flag_of_Ghana.svg.png" width=30 height=30>
                        </div>
                    </div>
                </div>

                
                    <label id="crypto_addrress" style=" margin-bottom: 1px; display: block;" for="contact"></label>
                    <input onchange="load()" type="text" name="crypto_address" id="crypto_address" class="form__input" placeholder="3FZbgi29cpjq2GjdwV8eyHuJJnkLtktZc5" value="{{ old('phone') }}" required>
        
            </div>
            

            <div class="col-sm-6">
                <div style="background-color:#005075;border-radius:100px;" class="card">
                    <label style=" margin-bottom: 1px; display: block;text-align:center;color:white;opacity:0.4">Your Are Buying </label>
                    <label style=" margin-bottom: 1px; display: block;text-align:center;color:white;font-size:25px" id="amount_paying_label">100.00</span> USD</span> </label>
                    <label style=" margin-bottom: 1px; display: block;text-align:center;color:white" for="contact" id="currency_label"></label>
                    <!-- <label style=" margin-bottom: 1px; display: block;text-align:center;color:white" for="contact">0.002457842159832 <span>BTC</span></label><br> -->
                    <label style=" margin-bottom: 1px; display: block;text-align:center;color:white;opacity:0.4" for="contact">And you will pay <span id="amount_to_pay_label"> 500.00</span> <span>GHS</span></label>
                    <label style=" margin-bottom: 1px; display: block;text-align:center;color:white" for="contact"><span style="opacity:0.4">At </span> <span> {{$currency->dollars}} GHS </span><span style="opacity:0.4"> Per</span> <span>1 USD</span></label>
                    <br><br><br>
                    <div  class="row">
                        <div style="text-align:center" class="col-sm-3"></div>
                        <div  style="text-align:center;color:white" class="col-sm-3">Fee</div>
                        <div  style="text-align:center;color:white" class="col-sm-3">{{$currency->fee}}<span> GHS</span></div>
                    </div><br>
                    <div  class="row">
                        <div style="text-align:center;color:white" class="col-sm-3"></div>
                        <div  style="text-align:center;color:white" class="col-sm-3">Total</div>
                        <div name="new_total_label" id="new_total_label"  style="text-align:center;color:white" class="col-sm-3">142.00<span> GHS</span></div>
                        <input hidden  type="text" name="new_total_save" id="new_total_save" class="form__input" placeholder="500.00" value="" >
                    </div>

                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-5">
                        <!-- <input type="submit" value="Buy" class="btn"> -->
                        <!-- Button trigger modal -->
                            <button id="modal_btn" disabled type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                Buy
                            </button>
                        </div>
                        <div class="col-sm-4"></div>
                    </div>
                    
                </div>
            </div>
        </div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Payment Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div class="col-sm-6">
                @foreach($data_payment as $payment)
                @endforeach
                <h5>Mobile Transactions</h5>
                <img src="https://cdn2.vectorstock.com/i/1000x1000/31/51/mobile-transaction-icon-vector-21023151.jpg" height=50 width=50>
                 <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact">Account Name:</label>
                 <label style=" margin-bottom: 1px; display: block;" for="contact">{{$payment->momo_account_name}}</label>

                 <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact">Account Number:</label>
                 <label style=" margin-bottom: 1px; display: block;" for="contact">{{$payment->momo_account_number}}</label>
                     
                             
            </div>
            <div class="col-sm-6">
                <h5>Bank Transactions</h5>
                <img src="https://cdn3.vectorstock.com/i/1000x1000/66/82/bank-transaction-icon-vector-7316682.jpg"height=50 width=50>
                <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact">Account Name:</label>
                 <label style=" margin-bottom: 1px; display: block;" for="contact">{{$payment->bank_account_name}}</label>

                 <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact">Account Number:</label>
                 <label style=" margin-bottom: 1px; display: block;" for="contact">{{$payment->bank_account_number}}</label>

                 <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact">Bank Name:</label>
                 <label style=" margin-bottom: 1px; display: block;" for="contact">{{$payment->bank_name}}</label>

                 <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact">Branch Name:</label>
                 <label style=" margin-bottom: 1px; display: block;" for="contact">{{$payment->bank_branch}}</label>
                   
            </div>
        </div><br>
        <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact"><span style="color:black;font-style:italic">Note:</span> Please Pay the Exact Amount Else Transaction Sataus Will Remail Pending Until Payment is Complete</label>

    
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <button type="submit" class="btn btn-primary">Submit Details</button>
      </div>
    </div>
  </div>
</div>
</form>
</div>
</body>
    

<script type="text/javascript">
    function myFunction() {
        var amount_needed = parseFloat(document.getElementById("amount_needed").value)
        var dollar_conversion= parseFloat(document.getElementById("dollar").value)
        var fee_conversion= parseFloat(document.getElementById("fee").value)
        var bitcoin_conversion= parseFloat(document.getElementById("bitcoin").value)
        var etherom_conversion= parseFloat(document.getElementById("etherom").value)
        var bitcoinCash_conversion= parseFloat(document.getElementById("bitcoinCash").value)
        var litecoin_conversion= parseFloat(document.getElementById("litecoin").value)


        var select = document.getElementById('crypto_type');
        var value = select.options[select.selectedIndex].value;
        if(value == "Bitcoin"){
            var total_btc = amount_needed * bitcoin_conversion 
            document.getElementById('currency_label').innerHTML = total_btc + ' ' +'BTC';
            document.getElementById('crypto_addrress').innerHTML = 'Your Bitcoin Address';

        }
        if(value == "Ethereum"){
            var total_eth = amount_needed * etherom_conversion
            document.getElementById('currency_label').innerHTML = total_eth + ' ' +'ETH';
            document.getElementById('crypto_addrress').innerHTML = 'Your Ethereum Address';
        }
        if(value == "Bitcoin Cash"){
            var total_bch = amount_needed * bitcoinCash_conversion
            document.getElementById('currency_label').innerHTML = total_bch + ' ' +'BCH';
            document.getElementById('crypto_addrress').innerHTML = 'Your Bitcoin Cash Address';
        }
        if(value == "Litecoin"){
            var total_ltc = amount_needed * litecoin_conversion
            document.getElementById('currency_label').innerHTML = total_ltc + ' ' +'LTC';
            document.getElementById('crypto_addrress').innerHTML = 'Your Litecoin Address';
        }
       
       
        



        var total_amount = amount_needed * dollar_conversion 
        var new_total = total_amount + fee_conversion
        
        //currency_label
        document.getElementById("amount_paying_hidden").value = total_amount
        document.getElementById("amount_paying").value = total_amount + '.00';  //save one
        document.getElementById('amount_paying_label').innerHTML = amount_needed +'.00 '+'USD';
        document.getElementById("amount_to_pay_label").innerHTML = total_amount+ '.00'
        document.getElementById("new_total_label").innerHTML = new_total +' '+ '.00'
        document.getElementById("new_total_save").value = new_total +' '+ '.00' //save one



        //currency
    }
</script>
<script type="text/javascript">
   function load() {
    var amount_needed = parseFloat(document.getElementById("amount_needed").value)
            if(amount_needed != null){
                document.getElementById("modal_btn").disabled = false;
            }
   }
</script>


@include('sweetalert::alert')
@endsection

