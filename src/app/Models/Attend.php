<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attend extends Model
{
    use HasFactory;
    protected $fillable = [
        'attend',
        'leave',
        'breakbegin',
        'breakend',
        'breaktime',
        'users_id',
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

}
