<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review_model extends Model
{
    use HasFactory;
    protected $fillable = [
        'review',
        'name',
        'email'
    ];
}
