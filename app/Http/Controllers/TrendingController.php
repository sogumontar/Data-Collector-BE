<?php


namespace App\Http\Controllers;


use Illuminate\Support\Facades\DB;

class TrendingController extends Controller
{
    public function findAllTrending()
    {
        $users = DB::select('SELECT nomor, COUNT(nomor) AS jumlah FROM pesans GROUP BY nomor ORDER BY jumlah DESC LIMIT 10');
        $response = [
            'code' => '200',
            'status' => 'OK',
            'data' => $users,
        ];
        return $response;
    }

    public function findDetailTrending($nomor)
    {
        $users = DB::select("SELECT * FROM pesans where nomor LIKE '" . $nomor . "'");
        $response = [
            'code' => '200',
            'status' => 'OK',
            'data' => $users,
        ];
        return $response;
    }

}
