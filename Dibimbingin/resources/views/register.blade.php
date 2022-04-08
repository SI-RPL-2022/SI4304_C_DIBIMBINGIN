@extends('navbar')

@section('content')

<div class="container py-5 h-10">
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-1">
                        
                    </div>
                    <div class="col-sm-4 text-center">
                        <h1>REGISTER</h1>
                        <br>
                        <input type="text" class="form-control" placeholder="NAMA"><br>
                        <input type="email" class="form-control" placeholder="EMAIL"><br>
                        <input type="phone" class="form-control" placeholder="PHONE NUMBER"><br>
                        <input type="text" class="form-control" placeholder="SCHOOL"><br>
                        <input type="password" class="form-control" placeholder="PASSWORD"><br><br>

                        <button class="btn btn-primary">REGISTER</button>

                    </div>
                    <div class="col-sm-2">

                    </div>
                    <div class="col-sm-4 text-center">
                        <h1>GAMBAR DIBIMBINGIN</h1>
                    </div>
                    <div class="col-sm-2">

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection