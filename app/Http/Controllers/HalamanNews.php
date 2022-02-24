<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalamanNews extends Controller
{
    public function news($id){
        return "Halaman ini menyediakan Berita tentang ".$id;
    }
}
