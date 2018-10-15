<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //Add belongs to relationship
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
