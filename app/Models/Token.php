<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    protected $fillable = [
        
        'email',
        'token',
        'expire_date',
        'status'
    ];

}
