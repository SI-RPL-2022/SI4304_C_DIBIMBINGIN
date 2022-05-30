@extends('dash.temp')

@section('content')

    <section class="content">
        <div class="container-fluid p-3">

            <h1 class="text-center"> Daftar Bimbel SMA</h1>

            <h4 class="mt-4">Profil</h4>
            <form action="{{route('admin.addsmapost')}}" method="post" enctype="multipart/form-data" class="">
                @csrf
                @method('post')
                <div class="form-group mb-3">
                    <input type="text" name="nama" placeholder="Nama Bimbel" class="form-control"  required>
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

                <div class="custom-file mb-3">
                    <input type="file" class="custom-file-input" id="validatedCustomFile" name="imagelogo" required>
                    <label class="custom-file-label" for="validatedCustomFile">Choose file...</label>
                    <div class="invalid-feedback">Example invalid custom file feedback</div>
                </div>

                <h4 class="mt-4">Pengajar Kami</h4>
                <div class="input-group hdtuto control-group lst increment" >
                    <input type="file" name="filenames[]" class="myfrm form-control">
                    <input type="text" name="pengajarname[]" class="myrfm form-control" placeholder="Nama Pengajar">
                    <div class="input-group-btn">
                        <button class="btn btn-success" type="button"><i class="fldemo glyphicon glyphicon-plus"></i>Add</button>
                    </div>
                </div>
                <div class="clone hide">
                    <div class="hdtuto control-group lst input-group" style="margin-top:10px">
                        <input type="file" name="filenames[]" class="myfrm form-control">
                        <input type="text" name="pengajarname[]" class="myrfm form-control" placeholder="Nama Pengajar">
                        <div class="input-group-btn">
                            <button class="btn btn-danger" type="button"><i class="fldemo glyphicon glyphicon-remove"></i> Remove</button>
                        </div>
                    </div>
                </div>


                <h4 class="mt-4">Tentang kami</h4>

                <div class="d-flex">
                    <div class="mr-5">
                        <img src="{{asset('bahan/ac.png')}}" alt="">
                        <div class="d-flex align-items-baseline">
                            <input type="checkbox" name="ac" aria-label="Checkbox for following text input">
                            <p class="ml-2">Ruangan ber-Ac</p>
                        </div>
                    </div>

                    <div class="mr-5">
                        <img src="{{asset('bahan/snack.png')}}" alt="">
                        <div class="d-flex align-items-baseline">
                            <input type="checkbox" name="snack" aria-label="Checkbox for following text input">
                            <p class="ml-2">Free Snack</p>
                        </div>
                    </div>

                    <div class="mr-5">
                        <img src="{{asset('bahan/wifi.png')}}" alt="">
                        <div class="d-flex align-items-baseline">
                            <input type="checkbox" name="wifi" aria-label="Checkbox for following text input">
                            <p class="ml-2">Free Wifi</p>
                        </div>
                    </div>

                    <div class="mr-5">
                        <img src="{{asset('bahan/modul.png')}}" alt="">
                        <div class="d-flex align-items-baseline">
                            <input type="checkbox" name="modul" aria-label="Checkbox for following text input">
                            <p class="ml-2">Modul Terlengkap</p>
                        </div>
                    </div>

                    <div class="mr-5">
                        <img src="{{asset('bahan/try.png')}}" alt="">
                        <div class="d-flex align-items-baseline">
                            <input type="checkbox" name="try" aria-label="Checkbox for following text input">
                            <p class="ml-2">Try Out Gratis</p>
                        </div>
                    </div>

                    <div class="mr-5">
                        <img src="{{asset('bahan/fleks.png')}}" alt="">
                        <div class="d-flex align-items-baseline">
                            <input type="checkbox" name="fleks" aria-label="Checkbox for following text input">
                            <p class="ml-2">Jam fleksibel</p>
                        </div>
                    </div>
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
