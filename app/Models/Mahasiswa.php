<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    protected $fillable=[
        'nim',
        'nama_lengkap',
        'tempat_lahir',
        'tgl_lahir',
        'prodi_id',
        'alamat',
        'no_hp',
        'agama',
        'agamaa',
        'jk',
        'nama_ayah',
        'nama_ibu',
        'program',
        'tahun_angkatan',
        'status_aktif'
    ];
}
