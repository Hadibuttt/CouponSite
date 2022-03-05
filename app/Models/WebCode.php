<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WebCode extends Model
{
    use HasFactory;

    protected $table = 'webcode';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'website',
        'code',
    ];
}
