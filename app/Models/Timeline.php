<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Bantukami; 
use App\Models\User; 

class Timeline extends Model 
{
    use HasFactory;
    use SoftDeletes;
    
    protected $softDelete = true;
    
    protected $fillable = [
        'bantukami_id', 
        'user_id', 
        'deskripsi',  
    ];

    protected $hidden = ["deleted_at"];
    
    public function bantukami()
    {
        return $this->belongsTo(Bantukami::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
