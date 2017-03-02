<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    public function children(){
        return $this->belongsToMany(Child::class);
    }
}
