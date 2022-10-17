@extends('admin.admin_side')
@section('content')
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"><br><br>
    <div class="row">
        <div class="col-sm-3">

        </div>

        <div class="col-sm-6">
            <div class="card">
            <h5 style="text-align:center">Chnage Password</h5>
                    <form method="POST" action="/AdminChangePassword">
                    @csrf
                    <div class="row">
                            <input type="password" name="password" id="password" class="form__input" placeholder="New Password" autocomplete="off"  required>
                        </div>

                        <div class="row">
                            <input type="password" name="confirm_pass" id="confirm_pass" class="form__input" placeholder="Confirm Password" required>
                        </div>

                        <div class="row">
                            <div class="col-sm-3"></div>
                            <div class="col-sm-6">
                            <input type="submit" value="Save" class="btn">
                            <div class="col-sm-3"></div>
                            </div>
                        </div>
                    </form>
                  
            </div>
         </div>

            <div class="col-sm-3">
            
            </div>
    </div>

@endsection
