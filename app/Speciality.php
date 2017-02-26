<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Speciality extends Model
{
    //
    $table = 'specialities';

    protected $fillable = [
        'speciality', 'description',
    ];

    public function doctor(){
        $this->belongsTo('App\Doctor');
    }
}
