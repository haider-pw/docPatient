<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable;
    use HasRoles;

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
        return $this->hasOne(Doctor::class);
    }

    /**
     * Get the guardian record if associated with the user.
     */
    public function guardian(){
        return $this->hasOne(Guardian::class);
    }

    /**
     * Get the patient record if associated with the user.
     */
   /* public function patient(){
        return $this->hasOne(Patient::class);
    }*/

    public function gender(){
        return $this->hasOne(Gender::class);
    }

}
