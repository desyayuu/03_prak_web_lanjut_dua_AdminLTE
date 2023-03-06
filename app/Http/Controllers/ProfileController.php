<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function desy(){
        return view('desyprofile')
        ->with('nama', 'Desy Ayurianti')
        ->with('nim', '2141720119')
        ->with('kelas', 'TI-2G')
        ->with('jurusan', 'D4 Teknik Informatika')
        ->with('asal', 'Sumenep');

    }
}
