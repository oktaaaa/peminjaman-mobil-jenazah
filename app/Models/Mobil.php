<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\MediaCollections\Models\Concerns\HasUuid;

class Mobil extends Model
{
    use HasFactory;
    protected $table = 'mobils';
    protected $fillable = ['kode', 'plat', 'brand', 'tahun_rilis'];
}
