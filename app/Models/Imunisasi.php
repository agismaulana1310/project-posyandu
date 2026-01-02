<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Imunisasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'anak_id',
        'jenis_imunisasi',
        'tanggal',
        'keterangan',
    ];

    public function anak()
    {
        return $this->belongsTo(Anak::class);
    }
}
