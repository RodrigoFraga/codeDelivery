<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
    	'user_id',
    	'telefone',
    	'endereco',
    	'cidade',
    	'estado',
    	'zipcode',
    ];

    public function user()
    {
    	return $this->hasOne(User::class);
    }
}
