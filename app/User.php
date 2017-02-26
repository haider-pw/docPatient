<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Get the doctor record if associated with the user.
     */
    public function doctor(){
        return $this->hasOne('App\Doctor');
    }

    /**
     * Get the guardian record if associated with the user.
     */
    public function guardian(){
        return $this->hasOne('App\Guardian');
    }

    /**
     * Get the patient record if associated with the user.
     */
    public function patient(){
        return $this->hasOne('App\Patient');
    }
}
