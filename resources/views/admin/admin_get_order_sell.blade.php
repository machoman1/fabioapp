@extends('admin.admin_side')
@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="row">
        <div class="col-sm-2">

        </div>

        <div class="col-sm-8">
            <div class="card">
            <!-- <h5 style="text-align:center">Add New User</h5> -->
                    <form method="POST" action="#">
                    @csrf
                    <input type="hidden" name="id" value="{{$data['id']}}">
                <div class="row">
                    <div class="col-sm-6">
                    <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact"><span style="color:black;font-style:italic"></span>Amount Selling</label>
                <label style=" margin-bottom: 1px; display: block;color:black;font-size:20px" for="contact"><span style="color:black;font-style:italic"></span>{{$data->amount_selling}}.00 USD</label>

                  <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact"><span style="color:black;font-style:italic"></span>Amount To Pay</label>
                  <label style=" margin-bottom: 1px; display: block;color:black;font-size:20px" for="contact"><span style="color:black;font-style:italic"></span>{{$data->total_amount_to_pay}} GHS</label>

                  <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact"><span style="color:black;font-style:italic"></span>Crypto Type</label>
                  <label style=" margin-bottom: 1px; display: block;color:black;font-size:20px" for="contact"><span style="color:black;font-style:italic"></span>{{$data->crypto_type}}</label>

                  <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact"><span style="color:black;font-style:italic"></span>Bank Account Number</label>
                  <label style=" margin-bottom: 1px; display: block;color:black;font-size:20px" for="contact"><span style="color:black;font-style:italic"></span>{{$data->bank_account_number}}</label>

                  <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact"><span style="color:black;font-style:italic"></span>Bank Name</label>
                  <label style=" margin-bottom: 1px; display: block;color:black;font-size:20px" for="contact"><span style="color:black;font-style:italic"></span>{{$data->bank_name}}</label>
               
                    </div>

                            <div class="col-sm-6">
                            <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact"><span style="color:black;font-style:italic"></span>Momo Account Number</label>
                <label style=" margin-bottom: 1px; display: block;color:black;font-size:20px" for="contact"><span style="color:black;font-style:italic"></span>{{$data->momo_account_number}}</label>

                  <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact"><span style="color:black;font-style:italic"></span>Momo Account Name</label>
                  <label style=" margin-bottom: 1px; display: block;color:black;font-size:20px" for="contact"><span style="color:black;font-style:italic"></span>{{$data->momo_account_name}}</label>

                  <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact"><span style="color:black;font-style:italic"></span>Bank Account Name</label>
                  <label style=" margin-bottom: 1px; display: block;color:black;font-size:20px" for="contact"><span style="color:black;font-style:italic"></span>{{$data->bank_name}}</label>

                  <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact"><span style="color:black;font-style:italic"></span>Bank Branch</label>
                  <label style=" margin-bottom: 1px; display: block;color:black;font-size:20px" for="contact"><span style="color:black;font-style:italic"></span>{{$data->bank_branch}}</label>
                
                            </div>
                    </div>

                       

                        <div class="row">
                           

                            
                        </div>
                        <a href="/admin_order_sell" class="btn">Back</a>
                    </form>
                        </div>
            </div>
         </div>

            <div class="col-sm-2">
            
            </div>
    </div>
@endsection
