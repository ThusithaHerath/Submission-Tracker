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
        'Publisher URL',
        'FeeForSubmission',
        'HowToSubmit',
        'Rating',
        'SimultaneousSubmissionAllowed',
        'Contact',
        'Deadline DATE',
        'DeadlineInfo',
        'Custom',
        'publisher_deadline_id',
        'publisher_type_id'
    ];

    public function publisherdeadline(){
        return $this->belongsTo(license_type::class,'publisher_deadline_id');
    }

    public function publisherType(){
        return $this->belongsTo(PublisherType::class,'publisher_type_id');
    }
}
