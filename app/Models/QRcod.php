<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QRcod extends Model
{
    use HasFactory;

    protected $fillable=[
        'title',
        'price',
        'Qrcod',
        'description',
    ];

}
