<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class administration extends Model
{
    use HasFactory;
    protected $table = 'administrations';
    protected $guarded = [];
}
