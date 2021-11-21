<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class authController extends Controller
{
    // Register

    public function register()
    {
        return view('register');
    }


    // Welcome

    public function welcome(Request $request)
    {
        $namaDepan = $request->input('namaDepan');
        $namaBelakang = $request->input('namaBelakang');
        return view('welcome', compact('namaDepan', 'namaBelakang'));
    }
}
