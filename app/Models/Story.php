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
        'Story_Name',
        'Lines',
        'Words',
        'Summary',
        'StoryStatus_ID',
        'StoryType_ID'
    ];


    public function story_status(): BelongsTo
    {
        return $this->belongsTo(StoryCompletionStatus::class );
    }

    public function story_type(): BelongsTo
    {
        return $this->belongsTo(StoryType::class);
    }
}