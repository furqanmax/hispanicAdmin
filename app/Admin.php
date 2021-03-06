<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\Admin as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;

class Admin extends Authenticatable
{
    use Notifiable,HasRoles;


    protected $guard='admin';
    protected $guard_name='admin';

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
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function canAny(array $permissions)
    {
        foreach($permissions as $e){
            if($this->can($e)) return true;
        }

        return false;
    }

    public function canAll(array $permissions)
    {
        foreach($permissions as $e){
            if(!$this->can($e)) return false;
        }

        return true;
    }
}
