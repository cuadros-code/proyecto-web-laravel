<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'celular', 'bio', 'ubicacion', 'imagen'
    ];

    public function usuario()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
