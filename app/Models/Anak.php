<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anak extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'nama_ibu',
    ];
    public function imunisasis()
    {
        return $this->hasMany(Imunisasi::class);
    }
    public function penimbangans()
    {
        return $this->hasMany(Penimbangan::class);
    }
    public function orangTua()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}

