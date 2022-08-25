<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model;

class Flight extends Model
{
    use HasFactory;
    protected $guarded = [];
    // protected $connection = 'mongodb';
}
