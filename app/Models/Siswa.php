<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    protected $table = 'siswas';
    protected $fillable = [
        'nama',
        'kelas'
    ];
    public $timestamps = false;
}
