<?php
namespace App\Models;

use MongoDB\Laravel\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $connection = 'mongodb';
    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password','mobile',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];
}