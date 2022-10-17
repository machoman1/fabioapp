@extends('admin.admin_side')
@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="row">
        <div class="col-sm-2">

        </div>

        <div class="col-sm-8">
            <div class="card">
            <!-- <h5 style="text-align:center">Add New User</h5> -->
                    <form method="POST" action="/AdminEditProduct">
                    @csrf
                    <input type="hidden" name="id" value="{{$data['id']}}">
                    <img src="{{$data['product_logo']}}" height=100px width=100px style="margin:auto">
                    <div class="row">
                        <div class="col-sm-6">
                        <label style=" display: block;" for="contact">Crypto Name</label>
                        <input type="text" name="name" id="name" class="form__input" value="{{$data['name']}}" required>
                        </div>

                        <div class="col-sm-6">
                        <label style=" display: block;" for="contact">Crypto Price</label>
                            <input type="text" name="price" id="price" class="form__input" value="{{$data['price']}}" required>
                        </div>
                    </div>

                       

                        <div class="row">
                            <div class="col-sm-6">
                                <!-- <input type="text" name="change_arrow" id="change_arrow" class="form__input" value="{{$data['change_arrow']}}" required> -->
                                <label style=" display: block;" for="contact">Chnage Status</label>
                                <select type="text" name="change_arrow" id="change_arrow" class="form__input"  required>
                                <option value="{{$data['change_arrow']}}">{{$data['change_arrow']}}</option>
                                <option value="up">up</option>
                                <option value="down">down</option>
                                </select>
                            </div>

                            <div class="col-sm-6">
                            <label style=" display: block;" for="contact">Chnage Value</label>
                                <input type="text" name="change_value" id="change_value" class="form__input" value="{{$data['change_value']}}" required>
                            </div>
                            <div class="col-sm-6">
                                <!-- <input type="text" name="status" id="status" class="form__input" value="{{$data['status']}}" required> -->
                                <label style=" display: block;" for="contact">Product Status</label>
                                <select type="text" name="status" id="status" class="form__input"  required>
                                <option value="{{$data['status']}}">{{$data['status']}}</option>
                                <option value="active">active</option>
                                <option value="inactive">inactive</option>
                                </select>
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
