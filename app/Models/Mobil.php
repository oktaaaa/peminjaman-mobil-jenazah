<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Concerns\HasUuid;

class Mobil extends Model
{
    use HasFactory;
    protected $table = 'mobils';
    protected $fillable = ['id','kode', 'plat', 'brand', 'tahun_rilis'];
    public function statusPermohonans()
    {
        return $this->hasMany(StatusPermohonan::class);
    }
}
