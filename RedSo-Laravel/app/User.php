<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{ 
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre','apellido','foto_perfil','usuario','','email', 'password','cumpleanios','ciudad',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ]; 

    public function posteos()
    {
        return $this->hasMany(Posteo::class,'id_usuario');
    } 

    public function seguidos()
    {
        return $this->belongsToMany('App\User', 'amigos', 'id_usuario', 'id_amigo');
    } 

    public function seguidores()
    {
        return $this->belongsToMany('App\User', 'amigos', 'id_amigo', 'id_usuario');
    } 
    
}
