<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{

    public function diseases(){
        return $this->belongsToMany(Disease::class,'patient_has_diseases');
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
