<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\DBAL\TimestampType;

class users extends Model
{
    use HasFactory;
    public $timestamps = false;
}
