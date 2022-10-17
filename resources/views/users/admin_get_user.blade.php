@extends('admin.admin_side')
@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="row">
        <div class="col-sm-2">

        </div>

        <div class="col-sm-8">
            <div class="card">
            <!-- <h5 style="text-align:center">Add New User</h5> -->
                    <form method="POST" action="/AdminEditUser">
                    @csrf
                    <input type="hidden" name="id" value="{{$data['id']}}">
                <div class="row">
                    <div class="col-sm-6">
                        <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact"><span style="color:black;font-style:italic"></span>Name</label>
                         <input type="text" name="name" id="name" class="form__input" placeholder="Your Account Name" autocomplete="off" value="{{$data->name}}" required>

                        <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact"><span style="color:black;font-style:italic"></span>Email</label>
                        <input type="text" name="email" id="email" class="form__input" placeholder="Your Account Name" autocomplete="off" value="{{$data->email}}" required>

                        <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact"><span style="color:black;font-style:italic"></span>Phone Number</label>
                        <input type="text" name="phone" id="phone" class="form__input" placeholder="Your Account Name" autocomplete="off" value="{{$data->phone}}" required>
                    </div>

                            <div class="col-sm-6">
                                <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact"><span style="color:black;font-style:italic"></span>Last Login</label>
                                <input type="text" name="name" id="name" class="form__input" placeholder="Your Account Name" autocomplete="off" value="{{$data->last_login}}" required>

                                <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact"><span style="color:black;font-style:italic"></span>User IP</label>
                                <input type="text" name="email" id="email" class="form__input" placeholder="Your Account Name" autocomplete="off" value="{{$data->user_ip}}" required>

                                <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact"><span style="color:black;font-style:italic"></span>User Role</label>
                                <input type="text" name="phone" id="phone" class="form__input" placeholder="Your Account Name" autocomplete="off" value="{{$data->role_as}}" required>
                            </div>
                    </div>

                       

                        <div class="row">
                           

                            
                        </div>
                        <a href="/viewUsers" class="btn">Back</a>
                    </form>
                        </div>
            </div>
         </div>

            <div class="col-sm-2">
            
            </div>
    </div>
@endsection
