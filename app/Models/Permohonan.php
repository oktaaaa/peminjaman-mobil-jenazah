<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    use HasFactory;

    public function statuspermohonans(){
        return $this->hasMany(Statuspermohonan::class);
    }

    
}
