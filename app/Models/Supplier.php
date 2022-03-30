<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $table = 'suppliers';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id',
        'name',
        'company_name',
        'address',
        'districts',
        'province',
        'postal_code',
        'phone_number',
        'bank',
        'no_rek',
    ];
}
