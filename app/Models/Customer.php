<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table = 'customers';
    protected $primaryKey = 'id';

    protected $fillable =[
        'foto_customer',
        'nama_customer',
        'email',
        'gender',
        'tempat_lahir',
        'tgl_lahir',
        'alamat',
        'no_hp',
    ];
}
