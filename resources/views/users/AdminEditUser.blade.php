@extends('admin.admin_side')
@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="row">
        <div class="col-sm-2">

        </div>

        <div class="col-sm-8">
            <div class="card">
            <h5 style="text-align:center">Add New User</h5>
                    <form method="POST" action="/AdminEditUser">
                    @csrf
                    <input type="hidden" name="id" value="{{$data['id']}}">
                    <div class="row">
                        <div class="col-sm-6">
                        <input type="text" name="name" id="name" class="form__input" value="{{$data['name']}}" required>
                        </div>

                        <div class="col-sm-6">
                            <input type="email" name="email" id="email" class="form__input" value="{{$data['email']}}" required>
                        </div>
                    </div>

                       

                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" name="phone" id="phone" class="form__input" value="{{$data['phone']}}" required>
                            </div>

                            <div class="col-sm-6">
                                <input type="text" name="role_as" id="role_as" class="form__input" value="{{$data['role_as']}}" required>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-sm-6">
                                <input type="password" name="password" id="password" class="form__input" value="{{$data['password']}}" required>
                            </div>

                            <div class="col-sm-6">
                                <input type="password" name="confirm_password" id="confirm_password" class="form__input" value="{{$data['password']}}" required>
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
