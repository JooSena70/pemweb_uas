<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sampah extends Model
{
    protected $table = 'sampah';
    
    protected $fillable = [
        'nama_sampah',
        'satuan',
        'harga_per_kg',
        'keterangan'
    ];
}