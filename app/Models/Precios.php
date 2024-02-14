<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Precios extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function supermercadoproducto(){
        return $this->belongsTo(Supermercadoproducto::class, 'supermercadoproductos_id' );
    }
}
