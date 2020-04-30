<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    public function post() {
        return $this-> belongsTo(Posteo::class,'post_id');
    } 

    public function user() {
        return $this-> belongsTo(User::class,'user_id');
    } 
}
