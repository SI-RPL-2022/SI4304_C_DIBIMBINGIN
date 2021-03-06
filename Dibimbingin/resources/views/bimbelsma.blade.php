@extends('layouts.app')

@section('content')

    <h1 class="h1 text-center" style="font-size: 50px; font-weight: bold; ">
        Tempat Bimbingan untuk Siswa SMA
    </h1>
    <p class="text-center">
        Program bimbingan ampuh untuk siswa SMA yang akan membantu siswa.
        Temukan program yang cocok denganmu!
    </p>

    <div class="d-flex flex-wrap justify-content-center">

        @foreach($data as $x)
            <div class="card m-3" style="width: 18rem;">
                <img src="{{asset('/bimbellogo/'.$x->image)}}" class="card-img-top" style="overflow: hidden; height: 100%" alt="...">
                <div class="card-body">
                    <p>Kelas 1,2,3 SMA/SMK/Sederajat</p>
                    <h5 class="card-title fa-bold fw-bold">{{$x->nama}}</h5>
                    <p class="card-text">{{$x->tentang_kami}}</p>
                    <a href="{{route('detailbimbel' , ['id'=>$x['id']])}}" class="btn btn-primary w-100">Lihat Detail</a>
                </div>
            </div>
        @endforeach
    </div>





@endsection
