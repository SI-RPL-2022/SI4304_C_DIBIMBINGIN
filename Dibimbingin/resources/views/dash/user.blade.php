@extends('dash.temp')

@section('content')

    <section class="content">
        <div class="container-fluid">

            <div class="card p-4 mx-5 mt-5">
                <h3 class=" mx-5 mt-3 ">All User</h3>

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Email</th>
                        <th scope="col">Username</th>
                        <th scope="col">Role</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $x)
                        <tr>
                            <td>{{$x->id}}</td>
                            <td>{{$x->email}}</td>
                            <td>{{$x->name}}</td>
                            @if($x->role == 'User')
                                <td><span class="badge badge-primary">User</span></td>
                            @elseif($x->role == 'Admin')
                                    <td> <span class="badge badge-success">Admin</span></td>
                            @else
                                <td><span class="badge badge-danger">Mitra</span></td>
                            @endif

                            <td>
                                <a class="btn btn-danger">Delete</a>
                            </td>
                        </tr>


                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>



@endsection
