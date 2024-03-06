<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayarans extends Model
{
    use HasFactory;
    protected $table = 'pembayarans';
    protected $primaryKey = 'id_pembayaran';
    protected $fillable = [
        'id_petugas', 'nisn', 'tgl_bayar', 'bulan_bayar', 'tahun_bayar', 'id_spp', 'jumlah_bayar'
    ];

    public function petugas()
    {
        return $this->belongsTo(Petugass::class, 'id_petugas', 'id_petugas');
    }
    public function siswa()
    {
        return $this->belongsTo(Siswas::class, 'nisn', 'nisn');
    }
    public function spp()
    {
        return $this->belongsTo(Spp::class, 'id_spp', 'id_spp');
    }
}
