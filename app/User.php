<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'password', 'username', 'land_area'
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

    public static function register($name, $email, $username, $password, $land_area)
    {
        $users = User::create([
            'name' => $name,
            'email' => $email,
            'username' => $username,
            'password' => $password,
            'land_area' => $land_area
        ]);
        if ($users) {
            return true;
        } else {
            return false;
        }
    }

    public function plant()
    {
        return $this->hasMany('App\Plant');
    }
}
