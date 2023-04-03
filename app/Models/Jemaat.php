<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jemaat extends Model
{
    use HasFactory;
    protected $table = ('jemaat');
    protected $primarykey = ('id');
    protected $fillable = [
        'id',
        'nik',
        'nama',
        'tmplhr',
        'tgllhr',
        'status_baptis',
        'tglsidi',
        'nama_ayah',
        'nama_ibu',
        'alamat',

    ];

}
