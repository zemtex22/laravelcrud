<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;


class UserDetail extends Model
{

    protected $fillable = [
        'address',
        'mobile_number',
        'mother_name',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
