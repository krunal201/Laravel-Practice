<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class User1 extends Model
{
    use Notifiable;

    protected $table = "user";

    protected $fillable = [
        "name","email","password"
    ];

    protected $hidden = [
        "password"
    ];
}
