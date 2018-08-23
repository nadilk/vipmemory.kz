<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contacts";

    protected $fillable = [
        'name', 'phone'
    ];

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
