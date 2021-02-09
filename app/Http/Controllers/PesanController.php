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
        $data = DB::table('pesans')->orderBy('created_at', 'desc')->get();
        $response = [
            'code' => '200',
            'status' => 'OK',
            'data' => $data,
        ];
        return $response;
    }

    public function search($nomor)
    {
        $result = DB::table('pesans')->where('nomor', 'like', '%' . $nomor . '%')->get();
        $response = [
            'code' => '200',
            'status' => 'OK',
            'data' => $result,
        ];
        return $response;
    }

    private function split($m)
    {
        $dat = explode(" ", $m);
        $i = 0;
        foreach ($dat as $data) {
            if (is_numeric($data)) {
                return str_replace("'", "", var_export($data, true));
            }
            $i++;
        }
    }
    private function findDate($date){
        $dat = explode(" ", $date);
        $i=0;
        foreach ($dat as $data) {
            $pattern = "/\d{4}\-\d{2}\-\d{2}/";
            if (preg_match($pattern, $data, $matches)) {
                return str_replace("'", "", var_export($data, true));
            }
            $i++;
        }
    }

    private function cleanSpace($data)
    {
        $res= str_replace(" ", "", $data);
        $ress= str_replace(" ", "", $res);
        return str_replace("-", "", $ress);
    }

    private function removeNumbs($num)
    {
        $res = preg_replace('/([0-9]+[\- ]?[0-9]+)/', '', $num);
        $result = preg_replace('/(\d{4}[\.\/\-][01]\d[\.\/\-][0-3]\d)/', '', $res);
        return $this->cleanSpace($result);
    }

    public function store(Request $request)
    {
        $val = explode("||",$request['isi']);
        foreach ($val as $item) {
            $this->saveData($item,$request);
        }

    }

    private function saveData($sms, $request){
        $nom = $this->prePo($this->split($sms));
        $pesan = new pesan();
        $pesan->judul = $request['judul'];
        $pesan->tanggal = $this->findDate($sms);
        $pesan->isi = $this->removeNumbs($sms);
        $pesan->nomor = $this->genericNumber($nom);
        $pesan->kategori = $request['kategori'];
        $pesan->id_pengirim = $request['id_pengirim'];
        $pesan->nama_pengirim = $request['nama_pengirim'];
        $pesan->jenis_provider = $this->checkProvider(substr($this->genericNumber($nom), 0, 4));
        $pesan->jumlah = $request['jumlah'];
        $pesan->save();
        $response = [
            'code' => '201',
            'status' => 'Created',
            'Message' => 'Insert Data Success',
        ];
        return $response;
    }

    private function genericNumber($nomor)
    {
        if ($nomor[0] == '+' && $nomor[1] == '6' && $nomor[2] == '2') {
            $nomor = substr_replace($nomor, '0', 0, 3);
        } else if ($nomor[0] == '6' && $nomor[1] == '2') {
            $nomor = substr_replace($nomor, '0', 0, 2);
        }
        return $nomor;
    }

    private function prePo($nomor)
    {
        return str_ireplace(array('-', ' ', '_'), '', $nomor);
    }

    private function checkProvider($nomor)
    {
        $listXl = ['0859', '0877', '0878', '0818', '0819',];
        $listTelkomsel = ['0821', '188', '0822', '0823', '0851', '0852', '0853', '0813', '0811', '0812',];
        $listTri = ['0898', '0899', '0895', '0896', '0897',];
        $listIndosat = ['0814', '0815', '0816', '0855', '0856', '0857', '0858',];
        $listSmartfren = ['0889', '0881', '0882', '0883', '0886', '0887', '0888', '0884', '0885',];
        $listCeria = ['0828',];
        $listByru = ['0868',];
        $listNTS = ['0838',];
        $listAxis = ['0832', '0833', '0831', '0838',];
        if (in_array($nomor, $listXl)) {
            return "XL";
        } else if (in_array($nomor, $listTelkomsel)) {
            return "Telkomsel";
        } else if (in_array($nomor, $listTri)) {
            return "Three";
        } else if (in_array($nomor, $listIndosat)) {
            return "Indosat";
        } else if (in_array($nomor, $listSmartfren)) {
            return "Smartfren";
        } else if (in_array($nomor, $listCeria)) {
            return "Ceria";
        } else if (in_array($nomor, $listByru)) {
            return "Byru";
        } else if (in_array($nomor, $listNTS)) {
            return "NTS";
        } else if (in_array($nomor, $listAxis)) {
            return "Axis";
        } else {
            return "Unknown";
        }
    }
}
