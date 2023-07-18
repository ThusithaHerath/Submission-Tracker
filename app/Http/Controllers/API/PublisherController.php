<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PublisherType;
use App\Models\Publisher;
use App\Models\Publisher_rating;

class PublisherController extends Controller
{
    public function index()
    {
        $publisher = Publisher::all();
        $type = PublisherType::all();
        $rating = Publisher_rating::all();
      
        return view('categories.publishers.publisher',compact('type','publisher','rating'));
        
    }

    public function store(Request $request){

        if (Publisher::where('Publisher','=', $request->input('publisher'))->exists()) {
			return redirect()->back()->with('publisher_exists','Sorry! Publisher with the provided name already exists!');
		}else{
            $publisher = new Publisher();
            $publisher->Publisher = $request->input('publisher');
            $publisher->publisherTypeId = $request->input('type');
            $publisher->SimultaneousSubmissionAllowed = $request->input('simultaneoussubmission');
            $publisher->publisherRatingId = $request->input('rank');
            $publisher->DeadlineDate = $request->input('deadline');
            $publisher->Contact = $request->input('contact');
            $publisher->save();

            return redirect()->back()->with('publisher_added','New publisher has been added!');
        }
    }


    public function update(Request $request)
    {
       
        Publisher::where('id', $request->publisher_id)
            ->update([
                'Publisher' => $request->publisher_name,
                'publisherTypeId' => $request->publisher_type,
                'SimultaneousSubmissionAllowed' => $request->publisher_submission,
                'DeadlineDate' => $request->publisher_deadline,
                'Rating' => $request->publisher_rank,
                'Contact' => $request->publisher_contact,
            ]);

            return redirect()->back()->with('publisher_updated', 'Publisher has succefully updated!');
    }


    public function destroy($id){

        if (Publisher::where('id','=', $id)->exists()) {

            $publisher = Publisher::find($id);
            $publisher->delete();
           
            return redirect()->back()->with('publisher_removed','Publisher removed successfully!');
		}else{
            return redirect()->back()->with('publisher_not_found','Sorry! Publisher not found!');
        }
    }
}