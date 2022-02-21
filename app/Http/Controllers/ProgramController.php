<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function Karir(){
        return "Mencari Karir";
    }
    public function Magang(){
        return "Mencari Magang";
    }
    public function KunjunganIndustri(){
        return "Mencari Kunjungan Industri";
    }
}
