<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Statuspermohonan extends Model
{
    use HasFactory;
    protected $fillable = ['permohonan_id', 'status', 'mobil_id'];
    public function permohonan()
    {
        return $this->belongsTo(Permohonan::class, 'permohonan_id');
    }
    public function mobil()
    {
        return $this->belongsTo(Mobil::class, 'mobil_id');
    }

    public function supir(){
        return $this->belongsTo(Supir::class);
    }
    // public function isTersedia()
    // {
    //     return $this->status === 'Tersedia';
    // }
}
