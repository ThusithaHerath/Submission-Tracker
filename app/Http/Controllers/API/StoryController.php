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
        return view('categories.stories.story', compact('story_type', 'story_status', 'story'));
    }

    public function store(Request $request)
    {

        if (Story::where('StoryName', '=', $request->input('story'))->exists()) {
            return redirect()->back()->with('story_exists', 'Sorry! Story with the provided name already exists!');
        } else {
            $story = new Story();
            $story->StoryName = $request->input('story');
            $story->StoryStatusID = $request->input('status');
            $story->StoryTypeID = $request->input('type');
            $story->Lines = $request->input('lines');
            $story->Words = $request->input('words');
            $story->Summary = $request->input('summary');
            $story->save();

            return redirect()->back()->with('story_added', 'New Story has been added!');
        }
    }



    public function update(Request $request)
    {
       
        Story::where('id', $request->story_id)
            ->update([
                'StoryName' => $request->editStory,
                'Lines' => $request->editLines,
                'Words' => $request->editWords,
                'Summary' => $request->summary,
                'StoryStatusID' => $request->editStatus,
                'StoryTypeID' => $request->editType,
            ]);

            return redirect()->back()->with('story_updated', 'Story has succefully updated!');
    }



    public function destroy($id)
    {

        if (Story::where('id', '=', $id)->exists()) {

            $story = Story::find($id);
            $story->delete();

            return redirect()->back()->with('story_removed', 'Story removed successfully!');
        } else {
            return redirect()->back()->with('story_not_found', 'Sorry! Story not found!');
        }
    }

    // public function lock($id){
       

    //     return redirect()->back()->with('story_locked', 'Story has succefully locked!');
    // }

    // public function unlock($id){
        
    //     Story::where('id', $id)
    //     ->update([
    //         'IsLock' => '0',
    //     ]);

    //     return redirect()->back()->with('story_unlocked', 'Story has succefully unlocked!');
    // }

}