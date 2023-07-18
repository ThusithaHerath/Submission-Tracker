<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StoryType;
use App\Models\StoryCompletionStatus;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Story extends Model
{
    use HasFactory;
    protected $table = 'story';

    protected $fillable = [
        'StoryName',
        'Lines',
        'Words',
        'Summary',
        'StoryStatusID',
        'StoryTypeID'
    ];


    public function storyStatus()
    {
        return $this->belongsTo(StoryCompletionStatus::class,'StoryStatusID' );
    }

    public function storyType()
    {
        return $this->belongsTo(StoryType::class,'StoryTypeID');
    }
}