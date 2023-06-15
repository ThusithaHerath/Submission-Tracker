<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoryController extends Controller
{
    public function index()
    {
        return view('categories.stories.story');
    }
}
