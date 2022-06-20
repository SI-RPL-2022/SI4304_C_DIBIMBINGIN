<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Bimbel;
use App\Models\Pengajar;
use App\Models\Tryout;
use App\Models\Event;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about(){
        return view('dash.about');
    }

    public function bimbel(){
        return view('bimbel');
    }

    public function bimbelsmp(){
        $data = Bimbel::all()->where('tipe' , 'smp' );
        return view('bimbelsmp' , ['data'=>$data]);
    }

    public function beasiswa(){
        $data = Beasiswa::all();
        return view('beasiswa' , ['data'=>$data]);
    }

    public function tryout(){
        $data = Tryout::all();
        return view('tryout' , ['data'=>$data]);
    }

    public function event(){
        $data = Event::all();
        return view('event' , ['data'=>$data]);
    }

    public function bimbelsma(){
        $data = Bimbel::all()->where('tipe' , 'sma' );
        return view('bimbelsma' , ['data'=>$data]);
    }

    public function detailbimbel($id){
        $data = Bimbel::find($id);
        $pengajar = Pengajar::all()->where('bimbel_id' , $id);
        return view('detailbimbel' , ['data'=>$data , 'pengajar'=>$pengajar]);
    }

    public function detailbeasiswa($id){
        $data = Beasiswa::find($id);
        return view('detailbeasiswa' , ['data'=>$data]);
    }

    public function detailtryout($id){
        $data = tryout::find($id);
        return view('detailtryout' , ['data'=>$data]);
    }

    public function detailevent($id){
        $data = event::find($id);
        return view('detailevent' , ['data'=>$data]);
    }
}
