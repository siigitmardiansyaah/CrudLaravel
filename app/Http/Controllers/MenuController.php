<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function home()
    {
        $data['title'] = "Halaman Home";
        return view('beranda',$data);
    }
    public function info_kegiatan()
    {
        $data['title'] = "Halaman Informasi Kegiatan";
        return view('info',$data);
    }
    public function data_siswa()
    {
        $data['title'] = "Halaman Data Siswa";
        return view('siswa',$data);
    }
}
