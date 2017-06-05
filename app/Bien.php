<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bien extends Model
{
    protected $guarded = array('id');

    public function user(){
    	return $this->belongsTo('App\User');
    }
    public function categorie(){
    	return $this->belongsTo('App\Categorie');
    }
    public function classe(){
    	return $this->belongsTo('App\Classe');
    }
}
