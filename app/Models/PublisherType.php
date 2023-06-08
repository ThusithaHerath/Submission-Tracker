<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublisherType extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'PublisherType_Name'
    ];
}
