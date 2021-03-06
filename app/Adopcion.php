<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adopcion extends Model
{

    protected $fillable = [
        'mascota', 'edad', 'peso', 'sexo', 'tipo', 'descripcion', 'imagen', 'vacunado', 'desparasitado',
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
