<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setoran;

class RiwayatController extends Controller
{
    public function index ()
    {
        $setor = Setoran::all();
        return view('user.riwayattranksasi.index',compact('setor'));
    }
}
