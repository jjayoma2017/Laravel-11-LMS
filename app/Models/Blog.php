<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    function scopeActive($query)
    {
        return $query->where('status', 1);
    }
    function scopeTopTen($query)
    {
        return $query->where('id', '<', 11);
    }
}
