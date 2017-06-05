<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password','passwordmd5',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'is_admin' => 'boolean',
        'is_vendeur' => 'boolean', //sert pour le middleware Admin et Vendeur
    ];

    public function biens(){
        return $this->hasMany('App\Bien');
    }

    public function isAdmin(){
        return $this->admin; // retourne vrai ou faux selon le boolean admin dans la base
    }

    public function isVendeur(){
        return $this->vendeur; // retourne vrai ou faux selon le boolean vendeur dans la base
    }

}
