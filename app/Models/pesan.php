<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesan extends Model
{
    protected $table = 'pesans';

    protected $primaryKey = 'id';

    protected $fillable = [
        'judul',
        'tanggal',
        'isi',
        'nomor',
        'kategori',
        'id_pengirim',
        'nama_pengirim',
        'jenis_provider',
        'jumlah'
    ];
}
