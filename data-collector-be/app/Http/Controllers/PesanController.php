<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pesan;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class PesanController extends Controller
{
    //
    public function find()
    {
        $data = DB::table('pesans')->get();
        $response = [
            'code' => '200',
            'status' => 'OK',
            'data' => $data,
        ];
        return $response;
    }

    public function search($nomor)
    {
        $result = DB::table('pesans')->where('nomor', 'like', '%' . $nomor . '%' )->get();
        $response = [
            'code' => '200',
            'status' => 'OK',
            'data' => $result,
        ];
        return $response;
    }

    public function store(Request $request)
    {
        $pesan = new pesan();
        $pesan->judul = $request['judul'];
        $pesan->tanggal = $request['tanggal'];
        $pesan->isi = $request['isi'];
        $pesan->nomor = $request['nomor'];
        $pesan->kategori = $request['kategori'];
        $pesan->id_pengirim = $request['id_pengirim'];
        $pesan->nama_pengirim = $request['nama_pengirim'];
        $pesan->jenis_provider = $request['jenis_provider'];
        $pesan->jumlah = $request['jumlah'];
        $pesan->save();
        $response = [
            'code' => '201',
            'status' => 'Created',
            'Message' => 'Insert Data Success',
        ];
        return $response;

    }
}
