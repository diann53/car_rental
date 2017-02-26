<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    //
    protected $fillable = [
        'users_id', 'owner_id', 'vehicles_id'
    ];

    public function users(){
        return $this->belongsTo('App\User', 'owner_id');
    }

    public function vehicles(){
        return $this->belongsTo('App\Vehicle');
    }

    public function userName(){
        return $this->belongsTo('App\User','users_id');
    }
}
