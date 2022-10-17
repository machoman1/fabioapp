@extends('users.user_side')
@section('content')
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<br><br>

<div class="content-wrap">
<form method="POST" action="/selling">
    @csrf
    @foreach($data_currency as $currency)
    @endforeach
    <input id="dollar" type="text" hidden value="{{$currency->dollars}}"{{$currency->dollars}}>
    <input id="bitcoin" type="text" hidden value="{{$currency->bitcoin}}"{{$currency->bitcoin}}>
    <input id="etherom" type="text" hidden value="{{$currency->etherom}}"{{$currency->etherom}}>
    <input id="litecoin" type="text" hidden value="{{$currency->litecoin}}"{{$currency->litecoin}}>
    <input id="bitcoinCash" type="text" hidden value="{{$currency->bitcoinCash}}"{{$currency->bitcoinCash}}>
    <input id="fee" type="text" hidden value="{{$currency->fee}}"{{$currency->fee}}>
    @foreach($data_address as $crypto_address)
    @endforeach
    <input id="bitcoin_address" type="text" hidden value="{{$crypto_address->bitcoin_address}}"{{$crypto_address->bitcoin_address}}>
    <input id="bitcoin_cash_address" type="text" hidden value="{{$crypto_address->bitcoin_cash_address}}"{{$crypto_address->bitcoin_cash_address}}>
    <input id="litecoin_address" type="text" hidden value="{{$crypto_address->litecoin_address}}"{{$crypto_address->litecoin_address}}>
    <input id="etheruem_address" type="text" hidden value="{{$crypto_address->etheruem_address}}"{{$crypto_address->etheruem_address}}>
        <div class="row">
            
            <div class="col-sm-6 card">

                <label style=" margin-bottom: 1px; display: block;" for="contact">Selling</label>
                <select style="width:50%" type="text" name="crypto_type" id="crypto_type" class="form__input" placeholder="Country" required>
                <option value="">Select Crypto</option>
                @foreach($data as $values)
                <option value="{{$values->name}}">{{$values->name}}  {{$values->abbreviation}}</option>
                @endforeach
                </select>

                <div class="row">
                    <div class="col-sm-4">
                    <div class="card">
                            <label style=" margin-bottom: 1px; display: block;" for="contact">Amount You Have</label>
                            <input onchange="myFunction()" type="number" name="amount_needed" id="amount_needed" class="form__input" placeholder="100.00" value="{{ old('phone') }}" required>
                            <img src="https://etc.usf.edu/clipart/72500/72519/72519_28_us_c_lg.gif" width=30 height=30>USD
                        </div>
                    </div>
                    <div class="col-sm-4">
                    <div style="" class="card"><span style="float:left">1 USD ~ {{$currency->dollars}} GHS</span></div>
                    </div>
                    <div class="col-sm-4">
                    <div class="card">
                            <label style=" margin-bottom: 1px; display: block;" for="contact">Amount You Get</label>
                            <input disabled type="number" name="amount_paying" id="amount_paying" class="form__input" placeholder="500.00" value="{{ old('phone') }}" required>
                            <input hidden type="number" name="amount_paying_hidden" id="amount_paying_hidden" class="form__input" placeholder="500.00" value="{{ old('phone') }}" required>
                            GHS
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/19/Flag_of_Ghana.svg/255px-Flag_of_Ghana.svg.png" width=30 height=30>
                        </div>
                    </div>
                </div>

                
                    <label id="crypto_addrress" style=" margin-bottom: 1px; display: block;" for="contact"></label>
                    <input disabled type="text" name="crypto_address" id="crypto_address" class="form__input" placeholder="3FZbgi29cpjq2GjdwV8eyHuJJnkLtktZc5" value="">
                    <input hidden  type="text" name="crypto_address_save" id="crypto_address_save" class="form__input" placeholder="3FZbgi29cpjq2GjdwV8eyHuJJnkLtktZc5" value="">

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
                        <div id="new_total_label"  style="text-align:center;color:white" class="col-sm-3">142.00<span> GHS</span></div>
                        <input hidden  type="text" name="new_total_save" id="new_total_save" class="form__input" placeholder="500.00" value="" >
                    </div>

                    <div class="row">
                        <div class="col-sm-4"></div>
                        <div class="col-sm-5">
                        <!-- <a style="padding-left:30px;font-size:15px;background-color: #6633fd;color:white;border-radius: 20px;border: none;outline: none;font-weight: 200;transition: all 0.5s ease;" href="{{route('register')}}" class="nav-item nav-link"><span style="padding-right:15px;text-align:center">Buy (500.00 GHS) Bitcoin </span></a> -->
                        <!-- <input id="new_total_label" type="submit "class="btn"value="Buy Bitcoin"> -->
                        <!-- <input  type="submit" value="Sell" class="btn"> -->
                        <button id="modal_btn"  type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                                Sell
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
        <h5 class="modal-title" id="exampleModalLongTitle">Choose Payemnt Method:</h5>
        
                <div id ="check">
                    <input style="width:20px;height:20px" type="checkbox" name="bank" value="Bank">
                    <lable id="Bank" name="Bank" for="Bank">Bank</label>
                    <input  style="width:20px;height:20px" type="checkbox" name="momo" value="MoMo">
                    <lable id="MoMo" name="MoMo" for="MoMo">MoMo</label>
                 </div>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
            <div style="display:none" id="momo" class="momo">
                <h5>Mobile Transactions</h5>
                <img src="https://cdn2.vectorstock.com/i/1000x1000/31/51/mobile-transaction-icon-vector-21023151.jpg" height=50 width=50>
                  <input type="text" name="momo_name" id="momo_name" class="form__input" placeholder="Your Account Name" autocomplete="off" value="">
                  <input type="text" name="momo_number" id="momo_number" class="form__input" placeholder="Your MoMo Number" autocomplete="off" value="">          
            </div>
            <div style="display:none" id="bank" class="bank">
                <h5>Bank Transactions</h5>
                <img src="https://cdn3.vectorstock.com/i/1000x1000/66/82/bank-transaction-icon-vector-7316682.jpg"height=50 width=50>
                <input type="text" name="bank_account_name" id="bank_account_name" class="form__input" placeholder="Your Account Name" autocomplete="off" value="">
                <input type="text" name="bank_account_number" id="bank_account_number" class="form__input" placeholder="Your Account Number" autocomplete="off" value="">
                <input type="text" name="bank_name" id="bank_name" class="form__input" placeholder="Your Bank Name" autocomplete="off" value="">
                <input type="text" name="bank_branch" id="bank_branch" class="form__input" placeholder="Your Bank Branch" autocomplete="off" value="">

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
    

<script type="text/javascript">
    function myFunction() {
        var amount_needed = parseFloat(document.getElementById("amount_needed").value)
        var dollar_conversion= parseFloat(document.getElementById("dollar").value)
        var fee_conversion= parseFloat(document.getElementById("fee").value)
        var bitcoin_conversion= parseFloat(document.getElementById("bitcoin").value)
        var etherom_conversion= parseFloat(document.getElementById("etherom").value)
        var bitcoinCash_conversion= parseFloat(document.getElementById("bitcoinCash").value)
        var litecoin_conversion= parseFloat(document.getElementById("litecoin").value)

            //crypto address
        var bitcoin_address= (document.getElementById("bitcoin_address").value)
        var etheruem_address= (document.getElementById("etheruem_address").value)
        var bitcoin_cash_address= (document.getElementById("bitcoin_cash_address").value)
        var litecoin_address= (document.getElementById("litecoin_address").value)

        var select = document.getElementById('crypto_type');
        var value = select.options[select.selectedIndex].value;
        if(value == "Bitcoin"){
            var total_btc = amount_needed * bitcoin_conversion 
            document.getElementById('currency_label').innerHTML = total_btc + ' ' +'BTC';
            document.getElementById('crypto_addrress').innerHTML = 'Bitcoin Address To Sell To';
            document.getElementById("crypto_address").value = bitcoin_address;
            document.getElementById("crypto_address_save").value = bitcoin_address;


        }
        if(value == "Ethereum"){
            var total_eth = amount_needed * etherom_conversion
            document.getElementById('currency_label').innerHTML = total_eth + ' ' +'ETH';
            document.getElementById('crypto_addrress').innerHTML = 'Ethereum Address To Sell To';
            document.getElementById("crypto_address").value = etheruem_address;
            document.getElementById("crypto_address_save").value = etheruem_address;

        }
        if(value == "Bitcoin Cash"){
            var total_bch = amount_needed * bitcoinCash_conversion
            document.getElementById('currency_label').innerHTML = total_bch + ' ' +'BCH';
            document.getElementById('crypto_addrress').innerHTML = 'Bitcoin Cash Address To Sell To';
            document.getElementById("crypto_address").value = bitcoin_cash_address;
            document.getElementById("crypto_address_save").value = bitcoin_cash_address;
        }
        if(value == "Litecoin"){
            var total_ltc = amount_needed * litecoin_conversion
            document.getElementById('currency_label').innerHTML = total_ltc + ' ' +'LTC';
            document.getElementById('crypto_addrress').innerHTML = 'Litecoin Address To Sell To';
            document.getElementById("crypto_address").value = litecoin_address;
            document.getElementById("crypto_address_save").value = litecoin_address;
        }
       
       
        



        var total_amount = amount_needed * dollar_conversion 
        var new_total = total_amount - fee_conversion
        
        //currency_label
        document.getElementById("amount_paying").value = total_amount 
        document.getElementById("amount_paying_hidden").value = total_amount //save
        document.getElementById('amount_paying_label').innerHTML = amount_needed +'.00 '+'USD';
        document.getElementById("amount_to_pay_label").innerHTML = total_amount+ '.00'
        document.getElementById("new_total_label").innerHTML = new_total +' '+ '.00'
        document.getElementById("new_total_save").value = new_total +' '+ '.00' //save


        //currency

    }
</script>

<script type="text/javascript">
$('#check input[name=momo]').on('change', function () {
      if($(this).prop('checked') == true)
      $(".momo").show();  // checked
      //$(".bank").hide(); 
       
  else if(!$("#check input[name=momo]:checked").length)
      $(".momo").hide();  // unchecked
  });
</script>

<script type="text/javascript">
$('#check input[name=bank]').on('change', function () {
      if($(this).prop('checked') == true)
      $(".bank").show();  // checked
      //$(".momo").hide(); 
       
  else if(!$("#check input[name=bank]:checked").length)
      $(".bank").hide();  // unchecked
  });
</script>



<script>
$('input[type="checkbox"]').on('change', function() {
   $('input[type="checkbox"]').not(this).prop('checked', false);
});
</script>



@include('sweetalert::alert')
@endsection

