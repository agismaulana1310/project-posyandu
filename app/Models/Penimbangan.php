<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penimbangan extends Model
{
    use HasFactory;

    protected $table = 'penimbangan';

    protected $fillable = [
        'anak_id',
        'tanggal',
        'berat_badan',
        'tinggi_badan',
        'keterangan',
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class);
    }
}
