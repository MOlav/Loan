<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Officer extends Authenticatable
{
    use Notifiable;


    protected $fillable = [
        'full_name', 'email', 'password', 'role','privilege'
    ];



    protected $hidden = [
        'password', 'remember_token',
    ];


}
