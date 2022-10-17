@extends('users.user_side')
@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



<div class="col-md-12">
                <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="font-weight: bold;">{{ __('User') }}
                    <!-- <a class="pl-5" href="add_users">Add New User</a> -->
                </div>

                <div class="card-body">
               <div class="table-responsive">
        <table id="mydTable" class="table table-striped table-boardered nowrap" style="width:100%">
        <thead>
             <tr>
                    <th>NAME</th>
                    <th>EMAIL</th>
                    <th>PHONE</th>
                    <th>DATE</th>
                    <th>ACTIONS</th>
            </tr>
           </thead>
            @foreach($data as $data)
           <tbody>
            <tr>
            <td>{{$data->name}}</td> 
            <td>{{$data->email}}</td>
            <td>{{$data->phone}}</td> 
            <td>{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</td>

            <td>
            <a href = '#'>
            <button id="modal_btn" data-toggle="modal" data-target="#exampleModalCenter" class="inline-flex items-center justify-center w-10 h-10 mr-2 text-indigo-100 transition-colors bg-blue-700 rounded-full focus:shadow-outline">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg>
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
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Your Account Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row">
                   <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact"><span style="color:black;font-style:italic"></span>Name</label>
                  <input type="text" name="name" id="name" class="form__input" placeholder="Your Account Name" autocomplete="off" value="{{$data->name}}" required>

                  <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact"><span style="color:black;font-style:italic"></span>Email</label>
                  <input type="text" name="email" id="email" class="form__input" placeholder="Your Account Name" autocomplete="off" value="{{$data->email}}" required>

                  <label style=" margin-bottom: 1px; display: block;color:#008080" for="contact"><span style="color:black;font-style:italic"></span>Phone Number</label>
                  <input type="text" name="phone" id="phone" class="form__input" placeholder="Your Account Name" autocomplete="off" value="{{$data->phone}}" required>

      </div>
      <div class="modal-footer">
        <button type="button" style="width:50%" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" style="width:50%" class="btn btn-primary">Update Details</button>
      </div>
    </div>
  </div>
</div>

@endsection
