<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Anak;

class Imunisasi extends Model
{
    // Nama tabel (karena tidak pakai plural default Laravel)
    protected $table = 'imunisasi';

    // Kolom yang boleh diisi mass-assignment
    protected $fillable = [
        'anak_id',
        'jenis_imunisasi',
        'tanggal',
    ];

    /**
     * Relasi: Imunisasi milik satu Anak
     */
    public function anak()
    {
        return $this->belongsTo(Anak::class);
    }
}
