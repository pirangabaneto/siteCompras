<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
	protected $fillable = [
        'cpf',
    ];

	//criando relacionamento One to One com user
    public function user(){
    	return $this->belongsTo('App\User');
    }
}
