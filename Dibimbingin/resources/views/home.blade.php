@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-1"></div>
        <div class="col-5">
            <h1 class="h1" style="font-size: 90px; font-weight: bold ; margin-top: 100px">
                Start <b class="text-primary">Learning </b>  <br> With Us
            </h1>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad adipisci aliquam animi ducimus eaque, incidunt laudantium, minima nihil optio placeat ut veniam. Fugiat minus rerum voluptas voluptatem? Maxime, molestiae, rem. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem incidunt nesciunt quia sapiente sunt vitae? Adipisci at aut deleniti exercitationem harum magni molestias nobis qui! Animi deleniti qui quia? Nulla!
            </p>
        </div>

        <div class="col-6">
            <img src="{{asset('/edu.png')}}" alt="">
        </div>
    </div>


@endsection
