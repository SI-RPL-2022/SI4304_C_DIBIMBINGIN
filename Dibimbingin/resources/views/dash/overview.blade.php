@extends('dash.temp')

@section('content')

    <section class="content">
        <div class="container-fluid">

            <div class="card p-4 mx-5 mt-5">
                <h3 class=" mx-5 mt-3 ">Overfiew</h3>

                <div class="d-flex mt-5">
                    <div class="info-box bg-info mx-3">
                        <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah User</span>
                            <span class="info-box-number">{{$user}}</span>
                        </div>
                    </div>

                    <div class="info-box bg-warning mx-3">
                        <span class="info-box-icon bg-warning"><i class="fas fa-school"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Bimbel Sma</span>
                            <span class="info-box-number">{{$bimbelsma}}</span>
                        </div>
                    </div>

                    <div class="info-box bg-success mx-3">
                        <span class="info-box-icon bg-success"><i class="fas fa-graduation-cap"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Bimbel Smp</span>
                            <span class="info-box-number">{{$bimbelsmp}}</span>
                        </div>
                    </div>

                    <div class="info-box bg-info mx-3">
                        <span class="info-box-icon bg-info"><i class="fas fa-ticket-alt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Bewasiswa</span>
                            <span class="info-box-number">{{$beasiswa}}</span>
                        </div>
                    </div>



                </div>


            </div>
        </div>
    </section>



@endsection
