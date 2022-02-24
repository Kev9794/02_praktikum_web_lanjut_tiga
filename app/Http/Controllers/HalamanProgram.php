<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanProgram extends Controller
{
    public function prog1(){
        return "Halaman ini untuk program Karir";
    }

    public function prog2(){
        return "Halaman ini untuk program Magang";
    }

    public function prog3(){
        return "Halaman ini untuk program Kunjungan Industri";
    }
}
