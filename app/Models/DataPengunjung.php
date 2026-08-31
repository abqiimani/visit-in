<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataPengunjung extends Model
{
    protected $table = 'data_pengunjung';

    protected $fillable = [
        'nama_lengkap',
        'phone',
        'asal_daerah',
        'kategori_pengunjung',
        'jumlah_pengunjung',
        'tanggal_kunjungan',
    ];
}