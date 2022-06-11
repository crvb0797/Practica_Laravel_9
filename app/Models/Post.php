<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /* Realación de la tabla post con la tabla usuarios */
    public function user(){
        return $this->belongsTo(user::class);
    }
}
