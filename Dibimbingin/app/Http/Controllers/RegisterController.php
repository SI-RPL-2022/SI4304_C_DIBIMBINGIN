<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index ()
    {
        return view('register.index',[
            'title' => 'Register',
            'active' => 'register'
        ]);
    }

    public function store (Request $request)
    {
        $validatedData = $request->validate([

            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'phonenumber' => 'required|max:255',
            'school' => 'required|max:255',
            'password' => 'required|min:5|max:255'



        ]);

        // Membuat Hashing pada Password atau dienkripsi
        //validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['password'] = Hash::make($validatedData['password']);

        //Memvalidate user dan memasukkannya ke database
        User::create($validatedData);
        //Membuat flash message berhasil registrasi
        // $request->session()->flash('success','Registration successfull! Please login');

        return redirect('/login')->with('success','Registration successfull! Please login');
    }
}
