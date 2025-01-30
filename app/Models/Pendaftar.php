<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    protected $table='pendaftars';
    protected $fillable=[
        'asal_instansi',
        'nama_pendaftar',
        'jenis_kelamin',
        'angkatan',
        'jurusan',
        'semester',
        'alasan'
    ];
}
