<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;
    protected $table = 'permohonans';
    protected $fillable = ['id','nik', 'nama_pemohon', 'nama_jenazah', 'alamat_penjemputan', 'alamat_tpu', 'tanggal_penjemputan', 'jam_penjemputan', 'no_hp', 'catatan'];
    // public function statuspermohonans()
    // {
    //     return $this->hasMany(Statuspermohonan::class, 'permohonan_id');
    // }

    public function statuspermohonans()
    {
        return $this->hasMany(Statuspermohonan::class);
    }

}
