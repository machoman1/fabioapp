@extends('admin.admin_side')
@section('content')

<div class="content-wrap">
        <div class="main">
             <div class="container-fluid">
                <div class="row">
                <div class="col-lg-8 p-r-0 title-margin-right">
                        <div class="page-header">
                            <div class="page-title">
                                <h1>Hello, <span>Welcome Here</span></h1>
                            </div>
                        </div>
                    </div>


                     <!-- /# column -->
                     <div class="col-lg-4 p-l-0 title-margin-left">
                        <div class="page-header">
                            <div class="page-title">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                            </div>
                        </div>
                    </div>

                     <!-- /# row -->
                     <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><ion-icon size="large" name="time-sharp"></ion-icon></div>
                                        <div class="stat-content dib">
                                        <div style=" color: grey;font-size: 22px;text-align:center" class="stat-text">Total Orders</div>
                                        <div class="stat-digit">50,000</div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><ion-icon size="large" name="person"></ion-icon></div>
                                        <div class="stat-content dib">
                                        <div style=" color: grey;font-size: 22px;text-align:center" class="stat-text">Total Users</div>
                                        <div class="stat-digit">84,000</div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><ion-icon size="large" name="card-outline"></ion-icon></div>
                                        <div class="stat-content dib">
                                        <div style=" color: grey;font-size: 22px;text-align:center" class="stat-text">Total Sell</div>
                                        <div class="stat-digit">40,000</div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-icon dib"><ion-icon size="large" name="cash-outline"></ion-icon></div>
                                        <div class="stat-content dib">
                                        <div style=" color: grey;font-size: 22px;text-align:center" class="stat-text">Total Buy</div>
                                        <div class="stat-digit">44,000</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @foreach($data as $data)
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <img style="border-radius:10px" src="{{$data->product_logo}}" alt="image" height=30 width=30>
                                    <!-- <div class="stat-icon dib"><ion-icon size="large" name="person"></ion-icon></div> -->
                                        <div class="stat-content dib">
                                        <div style=" color: grey;font-size: 22px;text-align:center" class="stat-text">{{$data->name}} Status</div>
                                        <div class="stat-digit"><span style="color:#008080">Price</span>: {{$data->price}} <span style="color:#008080"></span><span style="float:right"><ion-icon name="arrow-{{$data->change_arrow}}-outline"></ion-icon>{{$data->change_value}}</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach



                </div>
            </div>
        </div>
    </div>



@include('sweetalert::alert')
@endsection

