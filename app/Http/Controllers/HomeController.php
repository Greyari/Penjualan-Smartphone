<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // $data = [
        //     'nama'=>'GREY ARI DANIEL',
        //     'perkerjaan'=>'DEVELOPER'
        // ];
        // return view('home')->with($data);

        $nama = 'GREY ARI DANIEL SIMATUPANG';
        $pekerjaan = 'MAHASISWA';
        return view('home', compact('nama','pekerjaan'));
    }

    public function contact()
    {
        return view('contact');
    }
}
