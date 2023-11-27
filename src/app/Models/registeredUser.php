<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class registeredUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'e-mail',
        'password',
        'idnumber',
    ];
}
