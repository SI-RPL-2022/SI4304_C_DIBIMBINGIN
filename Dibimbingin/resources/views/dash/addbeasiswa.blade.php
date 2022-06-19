@extends('dash.temp')

@section('content')

    <section class="content">
        <div class="container-fluid p-3">

            <h1 class="text-center"> Daftar Beasiswa</h1>

            <h4 class="mt-4">Profil Beasiswa</h4>
            <form action="{{route('admin.addbeasiswapost')}}" method="post" enctype="multipart/form-data" class="">
                @csrf
                @method('post')
                <div class="form-group mb-3">
                    <input type="text" name="nama" placeholder="Nama Beasiswa" class="form-control"  required>
                </div>

                <div class="form-group mb-3">
                    <input type="text" name="alamat" placeholder="Alamat" class="form-control"  required>
                </div>

                <div class="form-group mb-3">
                    <input type="number" name="kontak" placeholder="Kontak Telepon" class="form-control"  required>
                </div>

                <div class="form-group mb-3">
                    <input type="number" name="wa" placeholder="Kontak Whatsapp" class="form-control" required >
                </div>

                <div class="form-group mb-3">
                    <input type="email" name="email" placeholder="Email" class="form-control"  required>
                </div>

                <div class="form-group mb-3">
                    <h4 class="mt-4">Tentang kami</h4>
                    <textarea name="tentang" id="Tentang Kami" class="form-control" rows="7"></textarea>
                </div>
                <div class="form-group mb-3">
                    <h4 class="mt-4">Syarat umum</h4>
                    <textarea name="syarat" id="Tentang Kami" class="form-control" rows="7"></textarea>
                </div>

                <div class="form-group mb-3">
                    <h4 class="mt-4">Registrasi</h4>
                    <textarea name="registrasi" id="Tentang Kami" class="form-control" rows="7"></textarea>
                </div>


                <div class="form-group mb-3">
                    <h4 class="mt-4">Info Beasiswa</h4>
                    <textarea name="info" id="Tentang Kami" class="form-control" rows="7"></textarea>
                </div>


                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" name="imagelogo" required>
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
