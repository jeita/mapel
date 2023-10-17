<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga;


class WargaController extends Controller
{
    public function index(){
        $warga = Warga ::all();  
        return view('warga.index', compact(['warga'])); 
    }
}
 