@extends('admin.admin_side')
@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="row">
        <div class="col-sm-2">

        </div>

        <div class="col-sm-8">
            <div class="card">
            <!-- <h5 style="text-align:center">Add New User</h5> -->
                    <form method="POST" action="/AdminEditAddress">
                    @csrf
                    <input type="hidden" name="id" value="{{$data['id']}}">
                    <div class="row">
                        <div class="col-sm-6">
                        <input type="text" name="bitcoin_address" id="bitcoin_address" class="form__input" value="{{$data['bitcoin_address']}}" required>
                        </div>

                        <div class="col-sm-6">
                            <input type="text" name="bitcoin_cash_address" id="bitcoin_cash_address" class="form__input" value="{{$data['bitcoin_cash_address']}}" required>
                        </div>
                    </div>

                       

                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="litecoin_address" id="litecoin_address" class="form__input" value="{{$data['litecoin_address']}}" required>
                            </div>

                            <div class="col-sm-6">
                                <input type="text" name="etheruem_address" id="etheruem_address" class="form__input" value="{{$data['etheruem_address']}}" required>
                            </div>
                        </div>

                            <div class="col-sm-6">
                            <!-- <label style=" margin-bottom: 1px; display: block;" for="contact">Department</label> -->
                           
                            </div>
                            <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6">
                            <input type="submit" value="Update" class="btn">
                            <div class="col-sm-3"></div>
                            </div>
                        </div>
                    </form>
                        </div>

                       
                  
            </div>
         </div>

            <div class="col-sm-2">
            
            </div>
    </div>
@endsection
