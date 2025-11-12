<?php

namespace App\Plugins\LeadManager\Models;

use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    protected $fillable = ['name', 'email', 'message', 'status'];
}
