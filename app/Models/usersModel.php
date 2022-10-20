<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class usersModel extends Model
{
    use HasFactory;
    protected $table = 'usersdata';
    protected $fillable = [
        'fname',
        'lname',
        'email',
        'phone',
        'city',
        'image',
        'designation'
    ];
}
