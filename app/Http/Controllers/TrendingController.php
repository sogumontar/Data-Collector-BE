<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class TrendingController extends Controller
{
    public function findAllTrending(){
        $users = DB::select('SELECT nomor, COUNT(nomor) AS jumlah FROM pesans GROUP BY nomor ORDER BY jumlah DESC LIMIT 10');
        return $users;

    }

}
