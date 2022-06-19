@extends('layouts.app')

@section('content')

    <h1 class="h1 text-center" style="font-size: 50px; font-weight: bold; ">
      Pilih Tingkat Pendidikanmu
    </h1>
    <p class="text-center">
        Cari tahu informasi dan  program bimbingan sesuai dengan tingkat pendidikanmu.
    </p>

    <div class="d-flex m-3 justify-content-center" style="margin-top: 120px">
        <a href="{{route('bimbelsmp')}}"> <img src="{{asset('/tombolsmp.png')}}" alt=""></a>
        <a href="{{route('bimbelsma')}}"> <img src="{{asset('/tombolsma.png')}}" alt=""></a>
    </div>



@endsection
