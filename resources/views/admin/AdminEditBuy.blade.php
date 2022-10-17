@extends('admin.admin_side')
@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<div class="row">
        <div class="col-sm-2">

        </div>

        <div class="col-sm-8">
            <div class="card">
            <!-- <h5 style="text-align:center">Add New User</h5> -->
                    <form method="POST" action="/AdminEditBuy">
                    @csrf
                    <input type="hidden" name="id" value="{{$data['id']}}">
                    <div class="row">
                        <!-- <input type="text" name="name" id="name" class="form__input" value="{{$data['status']}}" required> -->
                        <label style=" margin-bottom: 1px; display: block;" for="contact">Status</label>
                                <select type="text" name="status" id="status" class="form__input"  required>
                                <option value="{{$data['status']}}">{{$data['status']}}</option>
                                <option value="Processing">Processing</option>
                                <option value="Complete">Complete</option>
                                <option value="Pending">Pending</option>
                                </select>
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
