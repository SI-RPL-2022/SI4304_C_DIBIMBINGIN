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
                                  <p>We send you a link to get back into your account.Please check your email. Thank you</p><br>
                                  <a href="/"><button class="btn btn-primary px-5">BACK TO HOME</button></a>
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