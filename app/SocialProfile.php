<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialProfile extends Model
{
    //- relacion uno a muchos inversa
    public function user()
    {
        $this->belongsTo(User::class);
    }
}
