<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    { 
$nama = "Sayid";
$kelas = "XII RPL";
$hobi = "Tidur, Gaming, Nonton";
        return view('profil', [
            'nama' => $nama,
            'kelas' => $kelas,
            'hobi' => $hobi,
        ]);
    }

    public function sapa($nama)
    {
        return view('sapa', ['nama' => $nama]);
    }

    public function mapel()
    {
        $daftarMapel = ['Pemrograman Web', 'Basis Data', 'PBO', 'Bahasa Indonesia', 'Matematika'];
        return view('mapel', ['mapel' => $daftarMapel]);
    }
}