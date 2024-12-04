<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statuspermohonan extends Model
{
    use HasFactory;

    public function permohonan(){
        return $this->belongsTo(Permohonan::class);
    }

    public function isTersedia()
    {
        return $this->status === 'Tersedia';
    }
}
