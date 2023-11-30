<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $nama ="resa meylani";
        $alamat ="kota bandung";
        $tanggal_lahir ="10 februari 2002";
        $data_array = array (
            "nama"=> array (
                "Fauzi","desi","resa", "wulan",
            ),
        );
        
        return view ('profile', compact ('nama',
        'alamat',
        'tanggal_lahir','data_array')
        );
    }
}

//for dalam view, foreach//