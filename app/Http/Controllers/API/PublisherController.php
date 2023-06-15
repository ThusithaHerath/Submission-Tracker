<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    public function index()
    {
        return view('categories.publishers.publisher');
    }
}
