@extends('dash.temp')

@section('content')

    <section class="content">
        <div class="container-fluid">

            <div class="card p-4 mx-5 mt-6">
                <h3 class=" mx-5 mt-3 ">Overview</h3>

                <div class="row mt-6">
                    <div class="col-sm-5 info-box bg-info p-2">
                        <span class="info-box-icon bg-info"><i class="fas fa-users"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah User</span>
                            <span class="info-box-number">{{$user}}</span>
                        </div>
                    </div>
                    <div class="col-sm-2"></div>
                    <div class="col-sm-5 info-box bg-warning p-2">
                        <span class="info-box-icon bg-warning"><i class="fas fa-school"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Bimbel SMA</span>
                            <span class="info-box-number">{{$bimbelsma}}</span>
                        </div>
                    </div>

                    <!-- <div class="col-sm-"></div> -->
                    <div class="col-sm-5 info-box bg-success p-2">
                        <span class="info-box-icon bg-success"><i class="fas fa-school"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Bimbel SMP</span>
                            <span class="info-box-number">{{$bimbelsmp}}</span>
                        </div>
                    </div>

                     <div class="col-sm-2"></div>
                    <div class="col-sm-5 info-box bg-primary p-2">
                        <span class="info-box-icon bg-primary"><i class="fas fa-ticket-alt"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Event</span>
                            <span class="info-box-number">{{$event}}</span>
                        </div>
                    </div>

                    
                    <div class="col-sm-5 info-box bg-secondary p-2">
                        <span class="info-box-icon bg-secondary"><i class="fas fa-graduation-cap"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Jumlah Beasiswa</span>
                            <span class="info-box-number">{{$beasiswa}}</span>
                        </div>
                    </div>

                    <div class="col-sm-2"></div>
                    <div class="col-sm-5 info-box bg-danger p-2">
                        <span class="info-box-icon bg-danger"><i class="fas fa-book"></i></span>
                        <div class="info-box-content">
                            <span class="info-box-text">Tryout</span>
                            <span class="info-box-number">{{$tryout}}</span>
                        </div>
                    </div>

                    

                

                </div>
            </div>
        </div>
    </section>



@endsection
