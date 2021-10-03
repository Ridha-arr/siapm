<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Valid extends Model
{
    use HasFactory;
    protected $table='valids';
    protected $fillable=[
        'level',
        'tipe',
        'ketentuan'
    ];
    public function keterangan(){
        return $this->hasMany(Keterangan::class,'valid_id','id');
    }
    public function laporan(){
        return $this->hasMany(Laporan::class,'valid_id','id');
    }
}
