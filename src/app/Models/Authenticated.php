<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Authenticated extends Model
{
    use HasFactory;
    protected $fillable = [
        'e-mail',
        'password',
    ];
}
