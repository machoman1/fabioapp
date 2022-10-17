@extends('users.user_side')
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

                    <div class="row">
                        <div class="col-sm-5">
                            <h1>Cryptocurrencies, <span> Buy / Sell Rates</span></h1>
                        </div>
                        
                    </div>
                     <!-- /# row -->
                     @foreach($data_bitcoin as $values)
                     @endforeach
                     <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-2"><img style="border-radius:10px" src="{{$values->product_logo}}" alt="image" height=30 width=30></div>
                                    <div class="col-md-5"><span style="font-weight:bold;font-size:18px">{{$values->name}} <span style="opacity:0.3">{{$values->abbreviation}}</span></span></div>
                                    <div class="col-md-5"><span style=""><span style="opacity:0.3;font-size:18px">UNIT</span> <span style="font-weight:bold;font-size:18px">1 USD</span></span></div>
                                </div>
                                <div class="stat-icon dib pt-3"></div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div style="opacity:0.5" class="col-md-4">SELLING</div>
                                    <div style="opacity:0.5" class="col-md-4">BUYING</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div style="font-weight:bold;font-size:18px" class="col-md-4">{{$values->selling}}</div>
                                    <div style="font-weight:bold;font-size:18px" class="col-md-4">{{$values->buying}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div style="" class="col-md-4">
                                        <a style="font-weight:bold;width:100px;height:40px;color:black;text-align:center;padding-top:10px" class="btn-success card" href = 'selling'>
                                            Sell
                                        </a>
                                    </div>
                                    <div style="" class="col-md-4">
                                        <a style="font-weight:bold;width:100px;height:40px;color:black;text-align:center;padding-top:10px" class="btn-success card" href = 'buying'>
                                                Buy
                                        </a>
                                    </div>
                                </div>
                                    <!-- <div class="stat-content dib">helo</div> -->
                                    <!-- <div style=" color: grey;font-size: 22px;text-align:center" class="stat-text">Total Orders</div> -->
                                    <!-- <div class="stat-digit">Selling</div> -->
                                </div>
                            </div>
                            @foreach($data_etherom as $values)
                            @endforeach
                            <div class="col-md-4">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-2"><img style="border-radius:10px" src="{{$values->product_logo}}" alt="image" height=30 width=30></div>
                                    <div class="col-md-5"><span style="font-weight:bold;font-size:18px">{{$values->name}} <span style="opacity:0.3">{{$values->abbreviation}}</span></span></div>
                                    <div class="col-md-5"><span style=""><span style="opacity:0.3;font-size:18px">UNIT</span> <span style="font-weight:bold;font-size:18px">1 USD</span></span></div>
                                </div>
                                <div class="stat-icon dib pt-3"></div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div style="opacity:0.5" class="col-md-4">SELLING</div>
                                    <div style="opacity:0.5" class="col-md-4">BUYING</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div style="font-weight:bold;font-size:18px" class="col-md-4">{{$values->selling}}</div>
                                    <div style="font-weight:bold;font-size:18px" class="col-md-4">{{$values->buying}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div style="" class="col-md-4">
                                        <a style="font-weight:bold;width:100px;height:40px;color:black;text-align:center;padding-top:10px" class="btn-success card" href = '#'>
                                            Sell
                                        </a>
                                    </div>
                                    <div style="" class="col-md-4">
                                        <a style="font-weight:bold;width:100px;height:40px;color:black;text-align:center;padding-top:10px" class="btn-success card" href = '#'>
                                                Buy
                                        </a>
                                    </div>
                                </div>
                                    <!-- <div class="stat-content dib">helo</div> -->
                                    <!-- <div style=" color: grey;font-size: 22px;text-align:center" class="stat-text">Total Orders</div> -->
                                    <!-- <div class="stat-digit">Selling</div> -->
                                </div>
                            </div>
                            @foreach($data_litecoin as $values)
                            @endforeach
                            <div class="col-md-4">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-2"><img style="border-radius:10px" src="{{$values->product_logo}}" alt="image" height=30 width=30></div>
                                    <div class="col-md-5"><span style="font-weight:bold;font-size:18px">{{$values->name}} <span style="opacity:0.3">{{$values->abbreviation}}</span></span></div>
                                    <div class="col-md-5"><span style=""><span style="opacity:0.3;font-size:18px">UNIT</span> <span style="font-weight:bold;font-size:18px">1 USD</span></span></div>
                                </div>
                                <div class="stat-icon dib pt-3"></div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div style="opacity:0.5" class="col-md-4">SELLING</div>
                                    <div style="opacity:0.5" class="col-md-4">BUYING</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div style="font-weight:bold;font-size:18px" class="col-md-4">{{$values->selling}}</div>
                                    <div style="font-weight:bold;font-size:18px" class="col-md-4">{{$values->buying}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div style="" class="col-md-4">
                                        <a style="font-weight:bold;width:100px;height:40px;color:black;text-align:center;padding-top:10px" class="btn-success card" href = '#'>
                                            Sell
                                        </a>
                                    </div>
                                    <div style="" class="col-md-4">
                                        <a style="font-weight:bold;width:100px;height:40px;color:black;text-align:center;padding-top:10px" class="btn-success card" href = '#'>
                                                Buy
                                        </a>
                                    </div>
                                </div>
                                    <!-- <div class="stat-content dib">helo</div> -->
                                    <!-- <div style=" color: grey;font-size: 22px;text-align:center" class="stat-text">Total Orders</div> -->
                                    <!-- <div class="stat-digit">Selling</div> -->
                                </div>
                            </div>
                            @foreach($data_bitcoin_cash as $values)
                            @endforeach
                            <div class="col-md-4">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-2"><img style="border-radius:10px" src="{{$values->product_logo}}" alt="image" height=30 width=30></div>
                                    <div class="col-md-5"><span style="font-weight:bold;font-size:18px">{{$values->name}} <span style="opacity:0.3">{{$values->abbreviation}}</span></span></div>
                                    <div class="col-md-5"><span style=""><span style="opacity:0.3;font-size:18px">UNIT</span> <span style="font-weight:bold;font-size:18px">1 USD</span></span></div>
                                </div>
                                <div class="stat-icon dib pt-3"></div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div style="opacity:0.5" class="col-md-4">SELLING</div>
                                    <div style="opacity:0.5" class="col-md-4">BUYING</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div style="font-weight:bold;font-size:18px" class="col-md-4">{{$values->selling}}</div>
                                    <div style="font-weight:bold;font-size:18px" class="col-md-4">{{$values->buying}}</div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2"></div>
                                    <div style="" class="col-md-4">
                                        <a style="font-weight:bold;width:100px;height:40px;color:black;text-align:center;padding-top:10px" class="btn-success card" href = '#'>
                                            Sell
                                        </a>
                                    </div>
                                    <div style="" class="col-md-4">
                                        <a style="font-weight:bold;width:100px;height:40px;color:black;text-align:center;padding-top:10px" class="btn-success card" href = '#'>
                                                Buy
                                        </a>
                                    </div>
                                </div>
                                    <!-- <div class="stat-content dib">helo</div> -->
                                    <!-- <div style=" color: grey;font-size: 22px;text-align:center" class="stat-text">Total Orders</div> -->
                                    <!-- <div class="stat-digit">Selling</div> -->
                                </div>
                            </div>
                            
                        </div>
                        


                </div>
            </div>
        </div>
    </div>



@include('sweetalert::alert')
@endsection

