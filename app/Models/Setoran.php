<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setoran extends Model
{
    protected $table = 'setorans';
    
    protected $fillable = [
        'nama_user',
        'nama_sampah',
        'berat',
        'alamat',
        'status',
        'tanggal',
        'total'
    ];
    public function setor()
    {
        return $this->belongsTo(Sampah::class, 'id_sampah', 'id');
    }
}
