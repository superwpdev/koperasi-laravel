<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_category_model extends Model
{
    use HasFactory;
    protected $fillable = [
        'category',
        'status'
    ];
}
