<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    //
    protected $table = 'specialities';

    protected $fillable = [
        'speciality', 'description',
    ];

    public function doctor(){
        $this->belongsToMany(Doctor::class);
    }
}
