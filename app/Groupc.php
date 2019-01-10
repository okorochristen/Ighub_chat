<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Groupc extends Model
{
    protected $table='groupcs'; 
    protected $fillable =['name','duration','manager','participant','user_id'];

    public function groupchats()
    {
        return $this->belongsTo('App\Groupchat');
    }

}