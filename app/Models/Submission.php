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
    protected $fillable = [
        'SubmissionDate',
        'FeePaid',
        'PayReceived',
        'Notes',
        'Custom',
        'user_ID',
        'Story_ID',
        'Publisher_ID',
        'SubmissionMethod_ID',
        'SubmissionStatus_ID'
    ];


    public function user()
    {
        return $this->belongsTo(User::class,'user_ID' );
    }
    public function story()
    {
        return $this->belongsTo(Story::class,'Story_ID' );
    }
    public function publisher()
    {
        return $this->belongsTo(Publisher::class,'Publisher_ID' );
    }
    public function SubmissionMethod()
    {
        return $this->belongsTo(SubmissionMethod::class,'SubmissionMethod_ID' );
    }
    public function SubmissionStatus()
    {
        return $this->belongsTo(SubmissionStatus::class,'SubmissionStatus_ID' );
    }
}
