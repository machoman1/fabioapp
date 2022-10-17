@extends('admin.admin_side')
@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="row">
        <div class="col-sm-2">

        </div>

        <div class="col-sm-8">
            <div class="card">
            <!-- <h5 style="text-align:center">Add New User</h5> -->
                    <form method="POST" action="/AdminEditSellingCurrency">
                    @csrf
                    <input type="hidden" name="id" value="{{$data['id']}}">
                    <div class="row">
                        <div class="col-sm-6">
                        <label style=" display: block;" for="contact">Dollars</label>
                        <input type="text" name="dollars" id="dollars" class="form__input" value="{{$data['dollars']}}" required>
                        </div>

                        <div class="col-sm-6">
                        <label style=" display: block;" for="contact">Bitcoin</label>
                            <input type="text" name="bitcoin" id="bitcoin" class="form__input" value="{{$data['bitcoin']}}" required>
                        </div>

                        <div class="col-sm-6">
                        <label style=" display: block;" for="contact">Etheruem</label>
                        <input type="text" name="etherom" id="etherom" class="form__input" value="{{$data['etherom']}}" required>
                        </div>

                        

                        <div class="col-sm-6">
                                    <label style=" display: block;" for="contact">Litecoin</label>
                                    <input type="text" name="litecoin" id="litecoin" class="form__input" value="{{$data['litecoin']}}" required>
                        </div>

                        <div class="col-sm-6">
                                    <label style=" display: block;" for="contact">Bitcoin Cash</label>
                                    <input type="text" name="bitcoinCash" id="bitcoinCash" class="form__input" value="{{$data['bitcoinCash']}}" required>
                            </div>
                            
                        <div class="col-sm-6">
                                    <label style=" display: block;" for="contact">Fee</label>
                                    <input type="text" name="fee" id="fee" class="form__input" value="{{$data['fee']}}" required>
                            </div>

                            

                        <div class="col-sm-3"></div>
                        <div class="col-sm-6">
                        <input type="submit" value="Update" class="btn">
                        </div>
                        <div class="col-sm-3"></div>

                    </div>

                    </form>
                        </div>

                       
                  
            </div>
         </div>

            <div class="col-sm-2">
            
            </div>
    </div>
@endsection
