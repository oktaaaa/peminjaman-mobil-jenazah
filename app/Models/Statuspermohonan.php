<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statuspermohonan extends Model
{
    use HasFactory;
    protected $fillable = ['permohonan_id', 'status'];
    public function permohonans()
    {
        return $this->belongsTo(Permohonan::class, 'permohonan_id');
    }
    public function mobil()
    {
        return $this->belongsTo(Mobil::class);
    }

    // public function isTersedia()
    // {
    //     return $this->status === 'Tersedia';
    // }
}
