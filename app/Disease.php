<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disease extends Model
{
    public function patient(){
        return $this->belongsToMany(Patient::class,'patient_has_diseases');
    }
}
