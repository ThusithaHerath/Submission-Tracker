<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Story;
use App\Models\Publisher;
use App\Models\User;
use App\Models\SubmissionStatus; 
use App\Models\SubmissionMethod;

class Submission extends Model
{
    use HasFactory;
    protected $table = 'submission';
    protected $fillable = [
        'SubmissionDate',
        'FeePaid',
        'PayReceived',
        'Notes',
        'Custom',
        'userID',
        'StoryID',
        'PublisherID',
        'SubmissionMethodID',
        'SubmissionStatusID'
    ];


    public function user()
    {
        return $this->belongsTo(User::class,'userID' );
    }
    public function story()
    {
        return $this->belongsTo(Story::class,'StoryID' );
    }
    public function publisher()
    {
        return $this->belongsTo(Publisher::class,'PublisherID' );
    }
    public function SubmissionMethod()
    {
        return $this->belongsTo(SubmissionMethod::class,'SubmissionMethodID' );
    }
    public function SubmissionStatus()
    {
        return $this->belongsTo(SubmissionStatus::class,'SubmissionStatusID' );
    }
}
