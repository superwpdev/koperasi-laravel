<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category_model extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'category',
        'status'
    ];
}
