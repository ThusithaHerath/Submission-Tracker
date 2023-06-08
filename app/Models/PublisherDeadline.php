<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublisherDeadline extends Model
{
    use HasFactory;

    protected $fillable = [
        'PublisherDeadlineWarning_Color',
        'PublisherDeadlineWarning_Message',
        'DaysTilDealineLessThan',
        'PublisherFollowupWarning_Color',
        'PublisherFollowupWarning_Message',
        'DaysTilFollowupLessThan'
    ];
}
