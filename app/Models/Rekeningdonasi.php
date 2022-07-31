<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Rekeningdonasi extends Model
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;
    
    protected $fillable = [
        'bantukami_id', 
        'nama_bank', 
        'nama_akun', 
        'nomor_rekening', 
    ];

    protected $hidden = ["deleted_at"];
}
