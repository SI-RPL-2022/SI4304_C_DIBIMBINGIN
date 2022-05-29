@extends('dash.temp')

@section('content')

    <section class="content">
        <div class="container-fluid">

            <h1 class="text-center"> Daftar Bimbel</h1>

            <div class="card card-outline card-dark">
                <div class="d-flex justify-content-between p-3">
                    <div class="">
                        <h3>Bimbel SMP</h3>
                    </div>
                    <div class="d-flex">
                        <a href="{{route('admin.listsmp')}}" class="btn btn-success mr-2">Lihat List</a>
                        <a href="{{route('admin.addsmp')}}" class="btn btn-primary">Tambah List</a>
                    </div>
                </div>
                <hr>
                <div class="d-flex justify-content-between p-3">
                    <div class="">
                        <h3>Bimbel SMA</h3>
                    </div>
                    <div class="d-flex">
                        <a href="{{route('admin.listsma')}}" class="btn btn-success mr-2">Lihat List</a>
                        <a href="{{route('admin.addsma')}}" class="btn btn-primary">Tambah List</a>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
