@extends('navbar')

@section('content')

<div class="container py-5 h-10 text-center">
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-3">
                           
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                              <div class="card-header">
                                  Forgot Your Password ?
                              </div>
                              <div class="card-body">
                                  <p>Enter your email,phone, or username and we'll send you a link to get back into your account.</p><br>
                                  <input type="email" class="form-control" placeholder="EMAIL,PHONE,USERNAME"><br>
                                  <a href="/lpwd2"><button class="btn btn-primary px-5">SEND</button></a>
                              </div>
                          </div>
                        </div>
                        <div class="col-sm-3">
                            
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection