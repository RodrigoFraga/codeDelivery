<?php

namespace CodeDelivery\Models;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    protected $fillable = [
    	'produto_id',
    	'cliente_id',
    	'preco',
    	'qtd'
    ];

    public function order()
    {
    	return $this->belongsTo(Order::class);
    }

    public function produto()
    {	
    	return $this->belongsTo(Produto::class);
    }
}
