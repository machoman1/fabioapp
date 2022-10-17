@extends('admin.admin_side')
@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="row">
        <div class="col-sm-2">

        </div>

        <div class="col-sm-8">
            <div class="card">
            <!-- <h5 style="text-align:center">Add New User</h5> -->
                    <form method="POST" action="/AdminEditPayment">
                    @csrf
                    <input type="hidden" name="id" value="{{$data['id']}}">
                    <div class="row">
                        <div class="col-sm-6">
                        <label style=" display: block;" for="contact">MoMo Account Name</label>
                        <input type="text" name="momo_account_name" id="momo_account_name" class="form__input" value="{{$data['momo_account_name']}}" required>
                        </div>

                        <div class="col-sm-6">
                        <label style=" display: block;" for="contact">MoMo Acoount Number</label>
                            <input type="text" name="momo_account_number" id="momo_account_number" class="form__input" value="{{$data['momo_account_number']}}" required>
                        </div>

                        <div class="col-sm-6">
                        <label style=" display: block;" for="contact">Bank Acoount Name</label>
                        <input type="text" name="bank_account_name" id="bank_account_name" class="form__input" value="{{$data['bank_account_name']}}" required>
                        </div>

                        <div class="col-sm-6">
                        <label style=" display: block;" for="contact">Bank Acoount Number</label>
                        <input type="text" name="bank_account_number" id="bank_account_number" class="form__input" value="{{$data['bank_account_number']}}" required>
                        </div>

                        <div class="col-sm-6">
                                    <label style=" display: block;" for="contact">Bank Name</label>
                                    <input type="text" name="bank_name" id="bank_name" class="form__input" value="{{$data['bank_name']}}" required>
                        </div>

                        <div class="col-sm-6">
                                    <label style=" display: block;" for="contact">Bank Branch</label>
                                    <input type="text" name="bank_branch" id="bank_branch" class="form__input" value="{{$data['bank_branch']}}" required>
                            </div>

                        <div class="col-sm-6">

                        
                        </div>

                    </div>

                       

                        <div class="row">
                                <div class="col-sm-6">
                                    
                                  
                                </div>
                            </div>

                            <div class="col-sm-6">
                                     
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
