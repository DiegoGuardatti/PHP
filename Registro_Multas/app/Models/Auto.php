<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;

    protected $table = 'autos';
    
    protected $fillable =[
        "marca",
        "modelo",
        "patente",
        "tipo",

    ];
    public function titular(){

        return $this->belongsTo(Titular::class,'titular_id');
    }
    
    public function infraccion(){
        
        return $this->hasMany(Infraccion::class,'auto_id');
    }
}
