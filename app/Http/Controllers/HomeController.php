<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $title = 'Data Mahasiswa';
        $data['mahasiswa']=array(
            'nama'=>'Nyoman Gotama Bagus Kusuma',
            'nim'=>'1915101027',
            'prodi'=>'Ilmu Komputer',
            'jurusan'=>'Teknik Informatika',
            'alamat'=>'Singaraja'
        );
        return view('admin.beranda', compact('title','data'));
    }
    public function dashboard(){
        $title = 'Dashboard';
        return view('admin.dashboard', compact('title'));
    }
}
