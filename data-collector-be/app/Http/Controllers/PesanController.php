<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\pesan;

class PesanController extends Controller
{
    //
    public function findAll(){
        $pesans = pesan::all();
        return "asdad";
    }
}
