<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class LoginHistory extends Model
{
    use HasFactory;

    protected $fillable = [
        'MostRecentLoginDate',
        'NumberOfDaysLoggedIn',
        'NumberOfTimesLoggedIn',
        'userID'
    ];

    public function userId(){
        return $this->belongsTo(User::class,'userID');
    }
}
