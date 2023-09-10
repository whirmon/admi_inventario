<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedores extends Model
{
    protected $table = 'proveedores';

    public $timestamps = false;

    public function productos()
    {
        return $this->hasMany(Inventario::class, 'id_proveedores');
    }
}

