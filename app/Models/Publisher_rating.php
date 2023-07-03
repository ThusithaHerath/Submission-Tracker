<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publisher_rating extends Model
{
    use HasFactory;
    protected $fillable = [
        'publisher_rating_name',
        'publisher_rating_rank',
    ];
}
