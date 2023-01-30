<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voucher_model extends Model
{
    use HasFactory;
    protected $fillable = [
        'voucher_name',
        'value',
        'status'
    ];
}
