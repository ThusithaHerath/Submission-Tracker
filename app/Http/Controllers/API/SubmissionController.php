<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubmissionStatus;
use App\Models\Submission;
use App\Models\Story;
use App\Models\Publisher;
use Illuminate\Support\Facades\Auth;



class SubmissionController extends Controller
{
    public function index()
    {
        $submission_status = SubmissionStatus::all();
        $submission = Submission::all();
        $story = Story::all();
        $publisher = Publisher::all();
        return view('categories.submissions.submission',compact('submission_status','submission','story','publisher'));
    }

    public function store(Request $request){

        $submission = new Submission();
        $submission->SubmissionStatus_ID = $request->input('status');
        $submission->user_ID = $request->input('user');
        $submission->SubmissionDate = $request->input('submission');
        $submission->FeePaid = $request->input('pay');
        $submission->Notes = $request->input('note');
        $submission->Story_ID = $request->input('story');
        $submission->Publisher_ID = $request->input('publisher');
        $submission->save();

        return redirect()->back()->with('submission_added','New Submission has been added!');
    }

    public function destroy(Request $request, $id){

        if (Submission::where('id','=', $id)->exists()) {

            $submission = Submission::find($id);
            $submission->delete();
           
            return redirect()->back()->with('submission_removed','Submission removed successfully!');
		}else{
            return redirect()->back()->with('submission_not_found','Sorry! Submission not found!');
        }
    }
}
