<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_data_jemaat extends Model
{
    use HasFactory;

    
    
    /**
     * fillable
     *
     * @var array
     */
    protected $fillable = [
        'nik',
        'nama',
        'jk',
        'tmplhr',
        'tgllhr',
        'status baptis',
        'tglsidi',
        'nama ayah',
        'nama ibu',
        'alamat',
    ];
}
