<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infraccion extends Model
{
    use HasFactory;

    protected $table= "infracciones";

    protected $fillable = [
        "fecha",
        "descripcion",
        "tipo"
    ];

    public function autos(){

        return $this->belongsTo(Auto::class, 'auto_id');
    }
}
