@extends('users.user_side')
@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<div class="col-md-12">
                <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="font-weight: bold;">{{ __(' Bought Orders') }}
                    <!-- <a class="pl-5" href="add_users">Add New User</a> -->
                </div>

                <div class="card-body">
               <div class="table-responsive">
        <table id="mydTable" class="table table-striped table-boardered nowrap" style="width:100%">
        <thead>
             <tr>
                    <th>CRYPTO TYPE</th>
                    <th>AMOUNT NEEDED</th>
                    <th>AMOUNT PAID</th>
                    <th>STATUS</th>
                    <th>DATE</th>
                    <th>ACTIONS</th>
            </tr>
           </thead>
            @foreach($data_buying as $data)
           <tbody>
            <tr>
            <td>{{$data->crypto_type}}</td> 
            <td>{{$data->amount_needed}}.00 USD</td>
            <td>{{$data->new_total}} GHS</td> 
            <td>{{$data->status}}</td>
            <td>{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</td>

            <td>
            <a href = '#'>
            <button id="modal_btn" data-toggle="modal" data-target="#exampleModalCenter" class="inline-flex items-center justify-center w-10 h-10 mr-2 text-indigo-100 transition-colors bg-blue-700 rounded-full focus:shadow-outline">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>
                </svg>
            </button>
            </a>

            <!-- <a href = 'view_users'>
            <button class="inline-flex items-center justify-center w-10 h-10 mr-2 text-indigo-100 transition-colors duration-150 bg-red-700 rounded-full focus:shadow-outline hover:bg-pink-800">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16"><path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg>            </button>
            </a> -->

            </td>

             </tr>
            </tbody>
            @endforeach
        </table>  
                       
                  
                </div>
            </div>
        </div>
    </div>
    </div>


      <!-- Modal -->
      @foreach($data_buying as $data)
      @endforeach
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Your Order Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
                   <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact"><span style="color:black;font-style:italic"></span>Crypto Type</label>
                  <input type="text" name="momo_name" id="momo_name" class="form__input" placeholder="Your Account Name" autocomplete="off" value="{{$data->crypto_type}}">

                  <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact"><span style="color:black;font-style:italic"></span>Amount Needed</label>
                  <input type="text" name="momo_name" id="momo_name" class="form__input" placeholder="Your Account Name" autocomplete="off" value="{{$data->amount_needed}}.00 USD">

                  <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact"><span style="color:black;font-style:italic"></span>Amount Paid</label>
                  <input type="text" name="momo_name" id="momo_name" class="form__input" placeholder="Your Account Name" autocomplete="off" value="{{$data->new_total}} GHS">

                  <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact"><span style="color:black;font-style:italic"></span>Crypto Address</label>
                  <input type="text" name="momo_name" id="momo_name" class="form__input" placeholder="Your Account Name" autocomplete="off" value="{{$data->crypto_address}}">
      </div>
      <div class="modal-footer">
        <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
        <!-- <button class="btn btn-primary">Submit Details</button> -->
      </div>
    </div>
  </div>
</div>

@endsection
