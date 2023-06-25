<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StoryType;
use App\Models\StoryCompletionStatus;
use App\Models\PublisherType;
use App\Models\SubmissionStatus;

class SettingsController extends Controller
{
    public function add(Request $request){

        if($request->input('mfield') == '1'){ //Story Status

            $storyStatus = new StoryCompletionStatus();
            $storyStatus->StoryCompletionStatus_Name = $request->input('field_value');
            $storyStatus->save();
            return redirect()->back();

        }elseif($request->input('mfield') == '2'){ //Story type

            $storyType = new StoryType();
            $storyType->StoryType_Name = $request->input('field_value');
            $storyType->save();
            return redirect()->back();

        }elseif($request->input('mfield') == '3'){ //Publisher type

            $publisherType = new PublisherType();
            $publisherType->PublisherType_Name = $request->input('field_value');
            $publisherType->save();
            return redirect()->back();

        }elseif($request->input('mfield') == '4'){ //Submission status
            
            $submissionStatus = new SubmissionStatus();
            $submissionStatus->SubmissionStatus_Name = $request->input('field_value');
            $submissionStatus->save();
            return redirect()->back();
        }
    }
}
