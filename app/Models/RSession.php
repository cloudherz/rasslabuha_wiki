<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RSession extends Model
{
    protected $table = 'r_sessions';
    protected $primaryKey = 'r_session_id';
    public $timestamps = false;

    protected $fillable = [
        'r_user_id',
        'token',
        'ip',
        'agent',
        'creation_date',
        'expiration_date'
    ];

    public function user()
    {
        return $this->belongsTo(RUser::class, 'r_user_id', 'r_user_id');
    }
}
