<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DaftarProductController extends Controller
{
    public function marbel(){
        return "Marbel - Educational Games";
    }
    public function marbelandfriends(){
        return "Marbel & Friends - Kids Games";
    }
    public function riri(){
        return "Riri - Story Books";
    }
    public function kolak(){
        return "Kolak - Kids Songs";
    }
}
