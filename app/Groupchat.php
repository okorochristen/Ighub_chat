<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Groupchat extends Model
{
    //
    protected $guarded=['id'];
    protected $table='groupchats';
      protected $fillable =['content','group_id'];

    public function user(){
        return $this->belongsTo('App\User');
    }
    
    public function groupc(){
       return $this->hasMany('App\Groupc');
    }
}
