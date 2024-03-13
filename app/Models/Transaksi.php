<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $fillable = [
        'id_petugas', 'nisn', 'id_pembayaran', 'id_spp', 'status'
    ];

    public function petugas()
    {
        return $this->belongsTo(Petugass::class, 'id_petugas', 'id_petugas');
    }

    public function siswa()
    {
        return $this->belongsTo(Siswas::class, 'nisn', 'nisn');
    }

    public function pembayaran()
    {
        return $this->belongsTo(Pembayarans::class, 'id_pembayaran', 'id_pembayaran');
    }

    public function spp()
    {
        return $this->belongsTo(Spp::class, 'id_spp', 'id_spp');
    }
}
