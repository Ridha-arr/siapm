<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Laporan extends Model
{
    use HasFactory;
    protected $table = 'laporans';
    protected $fillable= [
        'user_id',
        'dokumen',
        'name',
        'keterangan_id',
        'verif'
    ];
    public function user(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function tanggal()
    {
        return $this->hasOne(Tanggals::class, 'id', 'laporan_id');
    }
    public function keterangan(){
        return $this->belongsTo(Keterangan::class, 'keterangan_id', 'id');
    }
    public function valid()
    {
        return $this->hasOne(Valid::class, 'id', 'valid_id');
    }
}
