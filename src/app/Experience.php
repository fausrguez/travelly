<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public function country() {
        return $this->hasOne('App\Country');
    }
}
