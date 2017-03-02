<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    public function guardians(){
        return $this->belongsToMany(Guardian::class);
    }
}
