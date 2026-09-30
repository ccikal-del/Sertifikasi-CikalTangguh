<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skema extends Model
{
    use HasFactory;

    protected $fillable = [
        'kode_skema',
        'nama_skema',
        'deskripsi',
    ];

    public function pesertas()
    {
        return $this->hasMany(Peserta::class);
    }
}