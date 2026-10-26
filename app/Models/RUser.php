<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RUser extends Model
{
    protected $table = 'r_users';
    protected $primaryKey = 'r_user_id';
    public $timestamps = false;

    protected $fillable = [
        'login',
        'password',
        'role',
        'nickname',
        'avatar',
        'status',
        'join_date'
    ];
}
