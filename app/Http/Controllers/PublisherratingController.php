<?php

namespace App\Http\Controllers;

use App\Models\Publisherrating;
use Illuminate\Http\Request;

class PublisherratingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if (PublisherRating::where('publisherRatingName', '=', $request->input('publisher_rating_name'))->exists()) {
            return redirect()->back()->with('rating_exists', 'Sorry! Rating with the provided name already exists!');
        } else {
            $rating = new PublisherRating();
            $rating->publisherRatingName = $request->input('publisher_rating_name');
            $rating->publisherRatingRank = $request->input('publisher_rating_rank');
            $rating->userID = $request->input('user');
            $rating->save();

            return redirect()->back()->with('rating_added', 'New rating has been added!');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publisherrating  $publisherrating
     * @return \Illuminate\Http\Response
     */
    public function show(Publisherrating $publisherrating)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publisherrating  $publisherrating
     * @return \Illuminate\Http\Response
     */
    public function edit(Publisherrating $publisherrating)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publisherrating  $publisherrating
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publisherrating $publisherrating)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publisherrating  $publisherrating
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publisherrating $publisherrating)
    {
        //
    }
}
