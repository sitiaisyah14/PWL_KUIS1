<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\Item as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Item extends Model
{
    protected $table ='items';
    protected $primaryKey ='id';

    protected $fillable =[
        'id_supplier',
        'gambar_sepatu',
        'merk_sepatu',
        'jenis_sepatu',
        'no_sepatu',
        'stok',
        'harga',
    ];
    use HasFactory;
}
