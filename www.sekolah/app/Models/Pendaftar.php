<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendaftar extends Model
{
    protected $table = 'pendaftars';
    protected $primaryKey = 'idpendaftar';
    public $incrementing = false;

    protected $fillable = [
        'idpendaftar',
        'namalengkap',
        'email',
        'no_hp',
        'tgllahir',
        'alamat',
        'namafakulitas',
        'namaprodi',
    ];
}