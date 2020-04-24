<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posteo extends Model
{
    public function user() {
        return $this-> belongsTo(User::class,'user_id');
    } 
    
    public function comentarios()
    {
        return $this->hasMany(Comentario::class, 'post_id');
    }

    public $timestamps = false;
}

