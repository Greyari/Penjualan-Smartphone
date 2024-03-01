<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class greyari extends Controller
{
    public function getListbarang() {
        $databarang = [
            ['id'=>1, 'nama'=>'coklat', 'harga'=> 20000],
            ['id'=>2, 'nama'=>'ayam', 'harga'=> 90000],
            ['id'=>3, 'nama'=>'pisang', 'harga'=> 50000],
            ['id'=>4, 'nama'=>'jeruk', 'harga'=> 27000],
            ['id'=>5, 'nama'=>'lemon', 'harga'=> 4000],
        ];
        return $databarang;
    }
    public function tampil(){
        $data = $this-> getListbarang();
        return view('greyari', compact('data'));
    }
}
