@extends('layouts.app')

@section('content')

    <h1 class="h1 text-center" style="font-size: 50px; font-weight: bold; ">
        Info TryOut
    </h1>
    <p class="text-center">
       Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci, consequatur corporis fugit id illo in modi molestias neque odit saepe sit totam. Aperiam dolorem doloremque iure pariatur tempore voluptate?
    </p>

    <div class="d-flex flex-wrap justify-content-center">

        @foreach($data as $x)
            <div class="card m-3" style="width: 18rem;">
                <img src="{{asset('/beasiswalogo/'.$x->image)}}" class="card-img-top" style="overflow: hidden; height: 100%" alt="...">
                <div class="card-body">
                    <p>Untuk Beasiswa Kuliah</p>
                    <h5 class="card-title fa-bold fw-bold">{{$x->nama}}</h5>
                    <p class="card-text">{{$x->tentang_kami}}</p>
                    <a href="{{route('detailbeasiswa' , ['id'=>$x['id']])}}" class="btn btn-primary w-100">Lihat Detail</a>
                </div>
            </div>
        @endforeach
    </div>





@endsection
