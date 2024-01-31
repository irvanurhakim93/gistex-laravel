<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaryawanModel extends Model
{
    use HasFactory;

    protected $table = 'karyawan';
    protected $primaryKey = 'kode_nik';
    protected $fillable = [
        'kode_nik',
        'nama_lengkap',
        'jabatan',
        'gaji_pokok',
        'insentif',
    ];
}
