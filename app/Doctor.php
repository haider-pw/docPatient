<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    /**
     * The clinics that belong to the doctor.
     */
    public function clinics()
    {
        return $this->belongsToMany('App\Clinic', 'doctor_clinic','doctor_id','clinic_id');
    }

    public function speciality()
    {
        return $this->belongsTo(Speciality::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
