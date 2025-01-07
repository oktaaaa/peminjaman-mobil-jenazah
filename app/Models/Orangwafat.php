<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orangwafat extends Model
{
    use HasFactory;
    protected $table = 'orangwafats';
    protected $fillable = ['nik', 'nama_jenazah', 'jk', 'alamat_jenazah', 'alamat_penjemputan', 'tuj_makam'];
}
