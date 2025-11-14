<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */
    protected $fillable = [
        'user_name',
        'score',
        'completed_at',
    ];

    /**
     * The attributes that should be cast to native types.
     */
    protected $casts = [
        'completed_at' => 'datetime',
        'score' => 'integer',
    ];
}
