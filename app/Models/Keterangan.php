<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keterangan extends Model
{
    use HasFactory;
    public function laporan()
    {
        return $this->hasMany(Laporan::class, 'valid_id', 'id');
    }
    public function valid()
    {
        return $this->hasOne(Valid::class, 'id', 'valid_id');
    }
}
