<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'username',
        'password',
        'email',
        'gender',
        'place_of_birth',
        'date_of_birth',
        'phone_number',
        'status',
        'position',
        'wages',
    ];
}
