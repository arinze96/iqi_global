<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class VerifyUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'token',
        'user_id',
    ];

    public function user() {
        return $this->BelongsTo('App\User');
    }
}
