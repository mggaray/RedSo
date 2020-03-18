<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posteo extends Model
{
    public function user() {
        return $this-> belongsTo(User::class,'usuario_id');
    }

    public $timestamps = false;
}

