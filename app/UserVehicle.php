<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserVehicle extends Model
{
    //
     protected $fillable = [
        'users_id','vehicles_id'
    ];

    public function users(){
        return $this->belongsTo('App\User');
    }

    public function vehicles(){
        return $this->belongsTo('App\Vehicle');
    }

    public function delete(){
        $this->vehicles()->delete();
        return parent::delete();
    }
}
