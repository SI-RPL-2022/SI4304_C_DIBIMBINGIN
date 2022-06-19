@extends('layouts.app')

@section('content')

    <div class="row">
        <div class="col-1"></div>
        <div class="col-5">
            <h1 class="h1" style="font-size: 90px; font-weight: bold ; margin-top: 100px">
                Start <b class="text-primary">Learning </b>  <br> With Us
            </h1>
            <p>
            Dibimbingin merupakan platform untuk mencari tempat bimbingan belajar terbaik di kotamu. Kemudahan yang diberikan akan membuat kamu menjadi lebih semangat lagi untuk belajar dan meraih cita citamu. Terdapat bermacam macam informasi yang kami berikan seperti informasi mengenai tempat bimbingan, truout bahkan informasi mengenai beasiswa juga loh! 
            </p>
        </div>

        <div class="col-6">
            <img src="{{asset('/edu.png')}}" alt="">
        </div>
    </div>


@endsection
