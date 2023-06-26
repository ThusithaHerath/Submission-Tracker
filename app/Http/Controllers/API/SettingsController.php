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
    public function add(Request $request)
    {

        if ($request->input('mfield') == '1') { //Story Status

            $storyStatus = new StoryCompletionStatus();
            $storyStatus->StoryCompletionStatus_Name = $request->input('field_value');
            $storyStatus->save();
            return redirect()->back();
        } elseif ($request->input('mfield') == '2') { //Story type

            $storyType = new StoryType();
            $storyType->StoryType_Name = $request->input('field_value');
            $storyType->save();
            return redirect()->back();
        } elseif ($request->input('mfield') == '3') { //Publisher type

            $publisherType = new PublisherType();
            $publisherType->PublisherType_Name = $request->input('field_value');
            $publisherType->save();
            return redirect()->back();
        } elseif ($request->input('mfield') == '4') { //Submission status

            $submissionStatus = new SubmissionStatus();
            $submissionStatus->SubmissionStatus_Name = $request->input('field_value');
            $submissionStatus->save();
            return redirect()->back();
        }
    }

    public function getFieldData(Request $request)
    {

        // <option value="1">Story Status</option>
        // <option value="2">Story type</option>
        // <option value="3">Publisher type</option>
        // <option value="4">Submission status</option>
        $data = [];

        if ($request->fieldValue[0] == '1') {
            $data = StoryCompletionStatus::all();
        }
        if ($request->fieldValue[0] == '2') {
            $data = StoryType::all();
        }
        if ($request->fieldValue[0] == '3') {
            $data = PublisherType::all();
        }
        if ($request->fieldValue[0] == '4') {
            $data = SubmissionStatus::all();
        }
        return $data;
    }
    public function deleteFieldData(Request $request)
    {
        if ($request->fieldValue[0] == '1') {
            StoryCompletionStatus::whereIn('id', $request->selectedItemIDs)->delete();
        }
        if ($request->fieldValue[0] == '2') {
            StoryType::whereIn('id', $request->selectedItemIDs)->delete();
        }
        if ($request->fieldValue[0] == '3') {
            PublisherType::whereIn('id', $request->selectedItemIDs)->delete();
        }
        if ($request->fieldValue[0] == '4') {
            SubmissionStatus::whereIn('id', $request->selectedItemIDs)->delete();
        }

        return 'successfully deleted';
    }
}
