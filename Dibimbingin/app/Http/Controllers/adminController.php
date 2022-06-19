<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Bimbel;
use App\Models\Pengajar;
use App\Models\User;
use Illuminate\Http\Request;

class adminController extends Controller
{

    public function beasiswalist(){
        $data = Beasiswa::all();
        return view('dash.beasiswalist' , ['data'=>$data]);
    }

    public function tryoutlist(){
        $data = Tryout::all();
        return view('dash.tryoutlist' , ['data'=>$data]);
    }

    public function overview(){
        $beasiswa = count(Beasiswa::all());
        $user = count(User::all());
        $bimbelsma = count(Bimbel::all()->where('tipe','sma'));
        $bimbelsmp = count(Bimbel::all()->where('tipe','smp'));
        return view('dash.overview' , ['beasiswa' => $beasiswa , 'user' => $user , 'bimbelsma' => $bimbelsma , 'bimbelsmp'=>$bimbelsmp]);
    }

    public function user(){
        $data = User::all();
        return view('dash.user' , ['data' => $data]);
    }
    public function indexbimbel(){
        return view('dash.indexbimbel');
    }

    public function addbeasiswa(){
        return view('dash.addbeasiswa');
    }

    public function addtryout(){
        return view('dash.addtryout');
    }

    public function addbeasiswapost(Request $request){
        $data = new Beasiswa();
        $data->nama = $request->nama;
        $data->tipe = "smp";
        $data->alamat = $request->alamat;
        $data->kontak = $request->kontak;
        $data->email = $request->email;
        $data->WA = $request->wa;
        $data->tentang_kami = $request->tentang;
        $data->syarat = $request->syarat;
        $data->registrasi = $request->registrasi;
        $data->info = $request->info;

        $file = $request->file('imagelogo');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'beasiswalogo';
        $file->move($tujuan_upload,$nama_file);
        $data->image = $nama_file;
        $data->save();

        return redirect()->route('admin.listbeasiswa');
    }

    public function addtryoutpost(Request $request){
        $data = new Tryout();
        $data->nama = $request->nama;
        $data->tipe = "smp";
        $data->alamat = $request->alamat;
        $data->kontak = $request->kontak;
        $data->email = $request->email;
        $data->WA = $request->wa;
        $data->tentang_kami = $request->tentang;
        $data->syarat = $request->syarat;
        $data->registrasi = $request->registrasi;
        $data->info = $request->info;

        $file = $request->file('imagelogo');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'beasiswalogo';
        $file->move($tujuan_upload,$nama_file);
        $data->image = $nama_file;
        $data->save();

        return redirect()->route('admin.listbeasiswa');
    }

    public function editbaesiswa($id){
        $data = Beasiswa::find($id);
        return view('dash.editbeasiswa' , ['data'=>$data]);
    }

    public function edittryout($id){
        $data = Beasiswa::find($id);
        return view('dash.edittryout' , ['data'=>$data]);
    }

    public function editbeasiswapost($id , Request $request){
        $data = Beasiswa::find($id);
        $data->nama = $request->nama;
        $data->tipe = "smp";
        $data->alamat = $request->alamat;
        $data->kontak = $request->kontak;
        $data->email = $request->email;
        $data->WA = $request->wa;
        $data->tentang_kami = $request->tentang;
        $data->syarat = $request->syarat;
        $data->registrasi = $request->registrasi;
        $data->info = $request->info;

        if ($request->imagelogo != null){
            $file = $request->file('imagelogo');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'beasiswalogo';
            $file->move($tujuan_upload,$nama_file);
            $data->image = $nama_file;
        }
        $data->update();
        return redirect()->back();
    }

    public function edittryoutpost($id , Request $request){
        $data = Tryout::find($id);
        $data->nama = $request->nama;
        $data->tipe = "smp";
        $data->alamat = $request->alamat;
        $data->kontak = $request->kontak;
        $data->email = $request->email;
        $data->WA = $request->wa;
        $data->tentang_kami = $request->tentang;
        $data->syarat = $request->syarat;
        $data->registrasi = $request->registrasi;
        $data->info = $request->info;

        if ($request->imagelogo != null){
            $file = $request->file('imagelogo');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'beasiswalogo';
            $file->move($tujuan_upload,$nama_file);
            $data->image = $nama_file;
        }
        $data->update();
        return redirect()->back();
    }

    public function deletebeasiswa($id){
        $data = Beasiswa::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function addsmp(){
        return view('dash.addsmp');
    }
    public function addsma(){
        return view('dash.addsma');
    }

    public function listsmp(){
        $data = Bimbel::all()->where('tipe','smp');
        return view('dash.listsmp' , ['data'=>$data]);
    }

    public function listsma(){
        $data = Bimbel::all()->where('tipe','sma');
        return view('dash.listsma' , ['data'=>$data]);
    }
    public function deletebimbel($id){
        $data = Bimbel::find($id);
        $data->delete();

        return redirect()->back();
    }



    public function addsmppost(Request $request){

            $data = new Bimbel();
            $data->nama = $request->nama;
            $data->tipe = "smp";
            $data->alamat = $request->alamat;
            $data->kontak = $request->kontak;
            $data->email = $request->email;
            $data->WA = $request->wa;
            $data->tentang_kami = $request->tentang;
            if ($request->snack != null){
                $data->snack_check = 1;
            }
        if ($request->ac != null){
            $data->ac_check = 1;
        }
        if ($request->fleks != null){
            $data->fleks_check = 1;
        }
        if ($request->wifi != null){
            $data->wifi_check = 1;
        }
        if ($request->try != null){
            $data->try_check = 1;
        }
        if ($request->modul != null){
            $data->modul_check = 1;
        }

        $file = $request->file('imagelogo');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'bimbellogo';
        $file->move($tujuan_upload,$nama_file);
        $data->image = $nama_file;
        $data->save();

        $files = [];
        $t = 0;
        if($request->hasfile('filenames'))
        {
            foreach($request->file('filenames') as $file)
            {
                $name = time().rand(1,10000).'.'.$file->extension();
                $file->move(public_path('pengajar'), $name);
                $file= new Pengajar();
                $file->bimbel_id = $data->id;
                $file->nama = $request->pengajarname[$t];
                $file->foto = $name;
                $file->save();

                $t = $t + 1;
                if ($t == 1){
                    $t = $t+1;
                }
            }
        }
        return redirect()->route('admin.indexbimbel');

    }

    public function addsmapost(Request $request){
        $data = new Bimbel();
        $data->nama = $request->nama;
        $data->tipe = "sma";
        $data->alamat = $request->alamat;
        $data->kontak = $request->kontak;
        $data->email = $request->email;
        $data->WA = $request->wa;
        $data->tentang_kami = $request->tentang;
        if ($request->snack != null){
            $data->snack_check = 1;
        }
        if ($request->ac != null){
            $data->ac_check = 1;
        }
        if ($request->fleks != null){
            $data->fleks_check = 1;
        }
        if ($request->wifi != null){
            $data->wifi_check = 1;
        }
        if ($request->try != null){
            $data->try_check = 1;
        }
        if ($request->modul != null){
            $data->modul_check = 1;
        }

        $file = $request->file('imagelogo');
        $nama_file = time()."_".$file->getClientOriginalName();
        $tujuan_upload = 'bimbellogo';
        $file->move($tujuan_upload,$nama_file);
        $data->image = $nama_file;
        $data->save();

        $files = [];
        $t = 0;
        if($request->hasfile('filenames'))
        {
            foreach($request->file('filenames') as $file)
            {
                $name = time().rand(1,10000).'.'.$file->extension();
                $file->move(public_path('pengajar'), $name);
                $file= new Pengajar();
                $file->bimbel_id = $data->id;
                $file->nama = $request->pengajarname[$t];
                $file->foto = $name;
                $file->save();

                $t = $t + 1;
                if ($t == 1){
                    $t = $t+1;
                }
            }
        }
        return redirect()->route('admin.indexbimbel');
    }

    public function editsmppost($id , Request$request){
        $data =Bimbel::find($id);
        $data->nama = $request->nama;
        $data->alamat = $request->alamat;
        $data->kontak = $request->kontak;
        $data->email = $request->email;
        $data->WA = $request->wa;
        $data->tentang_kami = $request->tentang;
        if ($request->snack != null){
            $data->snack_check = 1;
        }
        if ($request->ac != null){
            $data->ac_check = 1;
        }
        if ($request->fleks != null){
            $data->fleks_check = 1;
        }
        if ($request->wifi != null){
            $data->wifi_check = 1;
        }
        if ($request->try != null){
            $data->try_check = 1;
        }
        if ($request->modul != null){
            $data->modul_check = 1;
        }
        if ($request->imagelogo != null){
            $file = $request->file('imagelogo');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'bimbellogo';
            $file->move($tujuan_upload,$nama_file);
            $data->image = $nama_file;
        }

        $data->update();

        $files = [];
        $t = 0;
        if($request->hasfile('filenames'))
        {
            foreach($request->file('filenames') as $file)
            {
                $name = time().rand(1,10000).'.'.$file->extension();
                $file->move(public_path('pengajar'), $name);
                $file= new Pengajar();
                $file->bimbel_id = $data->id;
                $file->nama = $request->pengajarname[$t];
                $file->foto = $name;
                $file->save();

                $t = $t + 1;
                if ($t == 1){
                    $t = $t+1;
                }
            }
        }
        return redirect()->back();
    }

    public function editsmp($id){
        $data = Bimbel::find($id);
        $pengajar = Pengajar::all()->where('bimbel_id' , $id);
        return view('dash.editsmp' , ['data'=>$data , 'pengajar' => $pengajar]);
    }

    public function deletepengajar($id){
        $data = Pengajar::find($id);
        $data->delete();
        return redirect()->back();
    }
}
