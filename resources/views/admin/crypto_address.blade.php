@extends('admin.admin_side')
@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">



<div class="col-md-12">
                <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header" style="font-weight: bold;">{{ __('Crypto Addresses') }}
                    <!-- <a class="pl-5" href="add_users">Add New User</a> -->
                </div>

                <div class="card-body">
               <div class="table-responsive">
        <table id="mydTable" class="table table-striped table-boardered nowrap" style="width:100%">
        <thead>
             <tr>
                    <th>BITCOIN ADDRESS</th>
                    <th>BITCOIN CASH ADDRESS</th>
                    <th>LITECOIN ADDRESS</th>
                    <th>ETHERUEM ADDRESS</th>
                    <th>DATE</th>
                    <th>ACTIONS</th>
            </tr>
           </thead>
            @foreach($data as $data)
           <tbody>
            <tr>
            <td>{{$data->bitcoin_address}}</td> 
            <td>{{$data->bitcoin_cash_address}} GHS</td>
            <td>{{$data->litecoin_address}}</td> 
            <td>{{$data->etheruem_address}}</td>
            <td>{{ \Carbon\Carbon::parse($data->created_at)->diffForHumans() }}</td>

            <td>
            <a href = 'AdminEditAddress/{{$data->id}}'>
            <button class="inline-flex items-center justify-center w-10 h-10 mr-2 text-indigo-100 transition-colors bg-blue-700 rounded-full focus:shadow-outline">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16"><path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/><path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/></svg>
            </button>
            </a>

            <!-- <a href = '#'>
            <button class="inline-flex items-center justify-center w-10 h-10 mr-2 text-indigo-100 transition-colors duration-150 bg-red-700 rounded-full focus:shadow-outline hover:bg-pink-800">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16"><path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/></svg>            </button>
            </a> -->

            <!-- <a href = 'admin_get_order_sell/{{$data->id}}'>
            <button  class="inline-flex items-center justify-center w-10 h-10 mr-2 text-indigo-100 transition-colors duration-150 bg-red-700 rounded-full focus:shadow-outline hover:bg-pink-800">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16"><path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/><path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/></svg>
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
  

@endsection
