@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5"   style="background-color: rgba(245, 245, 245, 0.4); ">
                <div class="card-body">
                    <div class="row">
                        <div class="col-5">
                         <form method="POST" action="{{ route('register') }}">
                            @csrf
                             <h4 class="text-center mb-4 mt-4">Register Your Account </h4>
                            <div class="row mb-3">
                                <div class="col">
                                    <input id="name"  placeholder="Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">


                                <div class="col">
                                    <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">


                                <div class="col">
                                    <input placeholder="Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">


                                <div class="col">
                                    <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                             <div class="row mb-3">


                                 <div class="col">
                                     <input id="password-confirm" placeholder="Phone Number" type="text" class="form-control"  >
                                 </div>
                             </div>

                             <div class="row mb-3">


                                 <div class="col">
                                     <input id="password-confirm" placeholder="School" type="text" class="form-control"  >
                                 </div>
                             </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                        </div>


                        <div class="col">
                            <div class="d-flex justify-content-center align-items-center">
                                <img src="{{asset('/line.png')}}" class="h-100" alt="">
                                <img src="{{asset('/logoreg.png')}}" class="w-100" style="height: 300px">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
