<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "orders";

    protected $fillable = [
        'order_date', 'contact_id'
    ];

    public function contact(){
        return $this->belongsTo(Contact::class);
    }
}
