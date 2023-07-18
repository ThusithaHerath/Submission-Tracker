<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\PublisherDeadline;
use App\Models\PublisherType;

class Publisher extends Model
{
    use HasFactory;

    protected $table = 'publisher';
    protected $fillable = [
        'PublisherURL',
        'FeeForSubmission',
        'HowToSubmit',
        'Rating',
        'SimultaneousSubmissionAllowed',
        'Contact',
        'DeadlineDate',
        'DeadlineInfo',
        'Custom',
        'publisherDeadlineId',
        'publisherTypeId'
    ];

    public function publisherdeadline(){
        return $this->belongsTo(license_type::class,'publisherDeadlineId');
    }

    public function publisherType(){
        return $this->belongsTo(PublisherType::class,'publisherTypeId');
    }
}
