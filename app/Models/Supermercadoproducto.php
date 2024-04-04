<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supermercadoproducto extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function supermercado()
    {
        return $this->belongsTo(Supermercado::class);
    }
    public function producto()
    {
        return $this->belongsTo(Producto::class);

    }

    public function precios(){
        return $this->hasMany(Precios::class, 'supermercadoproductos_id');
    }


}
