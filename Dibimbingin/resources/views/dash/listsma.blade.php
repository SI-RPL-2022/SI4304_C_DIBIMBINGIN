@extends('dash.temp')

@section('content')

    <section class="content">
        <div class="container-fluid">

            <h1 class="text-center"> Daftar Bimbel SMA</h1>

            <div class="card card-outline card-dark">
                <div class="d-flex justify-content-between p-3 align-items-center justify-content-center">

                    <a href="{{route('admin.addsma')}}" class="btn btn-primary w-100">Tambah Bimbel</a>

                </div>
                <hr>
                @foreach($data as $x)
                    <div class="d-flex justify-content-between p-3">
                        <div class="">
                            <h5>{{$x->nama}}</h5>
                        </div>
                        <div class="d-flex">
                            <a href="{{route('admin.editsmp' , ['id'=>$x->id])}}" class="btn btn-warning mr-2">Edit List</a>
                            <a href="{{route('admin.deletebimbel' , ['id'=>$x->id])}}" class="btn btn-danger">Delete List</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



@endsection
