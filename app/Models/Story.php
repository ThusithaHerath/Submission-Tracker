<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\StoryType;
use App\Models\StoryCompletionStatus;

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

    public function sstatus(){
        return $this->belongsTo(StoryCompletionStatus::class,'StoryStatus_ID');
    }

    public function sstype(){
        return $this->belongsTo(StoryType::class,'StoryType_ID');
    }

}
