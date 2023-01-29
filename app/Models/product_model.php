<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_model extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_category',
        'product',
        'description',
        'image ',
        'price',
        'stock ',
        'status'
    ];
}