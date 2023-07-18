<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoryCompletionStatus extends Model
{
    use HasFactory;
    protected $table = 'story_completion_status';
    protected $fillable = [
        'StoryCompletionStatusName'
    ];
}
