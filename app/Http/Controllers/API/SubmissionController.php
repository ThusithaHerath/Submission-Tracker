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
        $story = Story::where('isLock', '=', '0')->get();
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
        
        $story_id = $request->input('story');
        $publisher_id = $request->input('publisher');
        $storyStatus = SubmissionStatus::select('SubmissionStatusLocksStory')->where('id',$story_id)->first();
        $Publisher_status = Publisher::select('SimultaneousSubmissionAllowed')->where('id',$publisher_id)->first();

       
        if($Publisher_status->SimultaneousSubmissionAllowed == '2' &&  $storyStatus->SubmissionStatusLocksStory == 'True'){

            Story::where('id', $story_id)
            ->update([
                'IsLock' => '1',
            ]);
        }

        return redirect()->back()->with('submission_added','New Submission has been added!');
    }


    public function update(Request $request)
    {
    //    dd($request);
        Submission::where('id', $request->submission_id)
            ->update([
                'Story_ID' => $request->story,
                'Publisher_ID' => $request->publisher,
                'SubmissionStatus_ID' => $request->submission_status,
                'SubmissionDate' => $request->submission,
                'FeePaid' => $request->pay,
                'Notes' => $request->note,
            ]);

            return redirect()->back()->with('submission_updated', 'Submission has succefully updated!');
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

    public function submissions(){
        $submissions = Submission::all();
        return view ('submissions',compact('submissions'));
    }
}