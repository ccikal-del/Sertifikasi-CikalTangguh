<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Peserta extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'skema_id',
        'nik',
        'nama',
        'gender',
        'no_hp',
        'alamat',
    ];

    // PESERTA DIMILIKI OLEH USER
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // PESERTA MEMILIKI SATU SKEMA
    public function skema(): BelongsTo
    {
        return $this->belongsTo(Skema::class);
    }
}