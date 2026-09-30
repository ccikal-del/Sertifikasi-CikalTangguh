<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Skema;

class Peserta extends Model
{
    use HasFactory;
   
   protected $fillable = [
    'skema_id',
    'nama',
    'nis',
    'email',
    'no_telepon',
    'alamat',
    'tanggal_lahir',
    'status',
];


    
   public function skema()
{
    return $this->belongsTo(Skema::class);
}
}
