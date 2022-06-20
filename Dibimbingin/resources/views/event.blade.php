@extends('layouts.app')

@section('content')

    <h1 class="h1 text-center" style="font-size: 50px; font-weight: bold; ">
        Info Event
    </h1>
    <p class="text-center">
       Informasi Event yang kami berikan merupakan Event yang akan dilakukan oleh beberapa tempat bimbingan yang terdaftar dengan kami. Ajak teman temanmu untuk ikut Event bareng kamu juga ya!
    </p>

    <div class="d-flex flex-wrap justify-content-center">

        @foreach($data as $x)
            <div class="card m-3" style="width: 18rem;">
                <img src="{{asset('/eventlogo/'.$x->image)}}" class="card-img-top" style="overflow: hidden; height: 100%" alt="...">
                <div class="card-body">
                    <p>Event</p>
                    <h5 class="card-title fa-bold fw-bold">{{$x->nama}}</h5>
                    <p class="card-text">{{$x->tentang_kami}}</p>
                    <a href="{{route('detaileventt' , ['id'=>$x['id']])}}" class="btn btn-primary w-100">Lihat Detail</a>
                </div>
            </div>
        @endforeach
    </div>





@endsection
