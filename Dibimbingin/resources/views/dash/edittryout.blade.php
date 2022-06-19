@extends('dash.temp')

@section('content')

    <section class="content">
        <div class="container-fluid p-3">

            <h1 class="text-center"> Daftar Tryout</h1>

            <h4 class="mt-4">Tryout</h4>
            <form action="{{route('admin.edittryoutpost' , ['id'=>$data['id']])}}" method="post" enctype="multipart/form-data" class="">
                @csrf
                @method('post')
                <div class="form-group mb-3">
                    <input type="text" name="nama" placeholder="Nama Tryout" class="form-control"  value="{{$data['nama']}}" required>
                </div>

                <div class="form-group mb-3">
                    <input type="text" name="alamat" placeholder="Tempat Tryout" class="form-control"  value="{{$data['alamat']}}" required>
                </div>

                <div class="form-group mb-3">
                    <input type="number" name="kontak" placeholder="Kontak Telepon" class="form-control" value="{{$data['kontak']}}" required>
                </div>

                <div class="form-group mb-3">
                    <input type="number" name="wa" placeholder="Kontak Whatsapp" class="form-control" value="{{$data['WA']}}" required >
                </div>

                <div class="form-group mb-3">
                    <input type="date" name="tanggal" placeholder="Tanggal Pelaksanaan" class="form-control"  value="{{$data['email']}}" required>
                </div>

                <div class="form-group mb-3">
                    <h4 class="mt-4">Tentang Tryout</h4>
                    <textarea name="tentang" id="Tentang Kami" class="form-control" rows="7">{{$data['tentang_kami']}}</textarea>
                </div>


                <div class="form-group mb-3">
                    <h4 class="mt-4">Syarat umum</h4>
                    <textarea name="syarat" id="Tentang Kami" class="form-control" rows="7">{{$data['syarat']}}</textarea>
                </div>

                <div class="form-group mb-3">
                    <h4 class="mt-4">Registrasi</h4>
                    <textarea name="registrasi" id="Tentang Kami" class="form-control" rows="7">{{$data['registrasi']}}</textarea>
                </div>


                <div class="form-group mb-3">
                    <h4 class="mt-4">Info Tryout</h4>
                    <textarea name="info" id="Tentang Kami" class="form-control" rows="7">{{$data['info']}}</textarea>
                </div>


                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" name="imagelogo" >
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>




                <button class="btn btn-success w-75 d-block mx-auto" type="submit">Submit</button>

            </form>
        </div>
    </section>



@endsection

@push('script')
    <script>
        $('#validatedCustomFile').on('change',function(){
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(".btn-success").click(function(){
                var lsthmtl = $(".clone").html();
                $(".increment").after(lsthmtl);
            });
            $("body").on("click",".btn-danger",function(){
                $(this).parents(".hdtuto").remove();
            });
        });
    </script>
@endpush
