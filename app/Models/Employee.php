<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Model;

class Employee extends Model
{
    use HasFactory;

    protected $table = 'employees';
    protected $primaryKey = 'id';

    //login
    protected $guarded =['username'];
    protected $hidden =[
        'password','remember_token',
    ];

    public function getAuthPassword()
    {
        return $this->password;
    }

    protected $fillable = [
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
