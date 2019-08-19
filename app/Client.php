<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Client extends Model
{    
    public function comptes()
    {
        return $this->hasMany('App\Compte');
    }
}
