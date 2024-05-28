<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Robot extends Model
{
    use HasFactory;

    protected $fillable = ['title',
        'hour',
        'amount',
        'token',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}