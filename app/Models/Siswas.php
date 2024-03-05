<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswas extends Model
{
    use HasFactory;
    protected $table = 'siswas';
    protected $primaryKey = 'nisn';
    protected $fillable = [
        'nisn', 'nis', 'nama', 'id_kelas', 'alamat', 'telp', 'id_spp'
    ];
}
