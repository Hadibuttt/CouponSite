<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Website extends Model
{
    use HasFactory;

    protected $table = 'websites';
    protected $primaryKey = 'id';

    protected $casts = [
        'coupon_codes' => 'array'
    ];

}
