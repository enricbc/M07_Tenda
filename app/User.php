<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
use Spatie\src\Models\Role;

class User extends Authenticatable
{   
    use HasRoles;   //trait que ens ofereix mètodes per a treballar amb rols i permisos d'usuari
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
        'name', 'email', 'password', 'id_role','confirmation_code',
=======
        'name', 'email', 'password','google_id', 'confirmation_code',
>>>>>>> c58626e3aad1382ffef773dc9b4b9ad8eb05e441
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
