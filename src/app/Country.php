<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function experiences() {
        return $this->hasMany('App\Experiences');
    }
}
