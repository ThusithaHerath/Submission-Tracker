<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StoryType;
use App\Models\Story;
use App\Models\StoryCompletionStatus;

class StoryController extends Controller
{
    public function index()
    {
        $story = Story::all();
        $story_type = StoryType::all();
        $story_status = StoryCompletionStatus::all();
        return view('categories.stories.story',compact('story_type','story_status','story'));
    }

    public function store(Request $request){
 
        if (Story::where('Story_Name','=', $request->input('story'))->exists()) {
			return redirect()->back()->with('story_exists','Sorry! Story with the provided name already exists!');
		}else{
            $story = new Story();
            $story->Story_Name = $request->input('story');
            $story->StoryStatus_ID = $request->input('status');
            $story->StoryType_ID = $request->input('type');
            $story->Lines = $request->input('lines');
            $story->Words = $request->input('words');
            $story->Summary = $request->input('summary');
            $story->save();

            return redirect()->back()->with('story_added','New Story has been added!');
        }
    }

}