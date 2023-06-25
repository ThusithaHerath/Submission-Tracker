<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PublisherType;
use App\Models\Publisher;

class PublisherController extends Controller
{
    public function index()
    {
        $publisher = Publisher::all();
        $type = PublisherType::all();
      
        return view('categories.publishers.publisher',compact('type','publisher'));
        
    }

    public function store(Request $request){

        if (Publisher::where('Publisher','=', $request->input('publisher'))->exists()) {
			return redirect()->back()->with('publisher_exists','Sorry! Publisher with the provided name already exists!');
		}else{
            $publisher = new Publisher();
            $publisher->Publisher = $request->input('publisher');
            $publisher->publisher_type_id = $request->input('type');
            $publisher->SimultaneousSubmissionAllowed = $request->input('simultaneoussubmission');
            $publisher->Rating = $request->input('rank');
            $publisher->DeadlineDATE = $request->input('deadline');
            $publisher->Contact = $request->input('contact');
            $publisher->save();

            return redirect()->back()->with('publisher_added','New publisher has been added!');
        }
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