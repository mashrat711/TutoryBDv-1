<?php

namespace App\Http\Controllers;

use App\FeaturedListing;
use App\ListingPaymentSetting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FeaturedListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$tests=DB::table('featured_listings');

        $tests=FeaturedListing::all();
        return view('instructor.featureListing.index', compact('tests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

//        $pays=ListingPaymentSetting::all();
        //$courses = Course::where('user_id', Auth::User()->id)->where('featured', '0')->get();
        //dd($courses);
        return view('instructor.featureListing.create', compact('pays'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//      return $request->all();
        //dd($request);
        $data=$request->all();

        $data = new FeaturedListing;
        $data->user_id = $request->user_id;
        $data->list_for = $request->list_for;
        $data->email = $request->email;
        $data->number = $request->number;
        $data->amount = $request->amount;
        $data->save();
        //dd($data);
        //FeaturedListing::create($data);
        //dd('ok');
        return redirect()->route('featureListing.index')->with('message','Data has been inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FeaturedListing  $featuredListing
     * @return \Illuminate\Http\Response
     */
    public function show(FeaturedListing $featuredListing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FeaturedListing  $featuredListing
     * @return \Illuminate\Http\Response
     */
    public function edit(FeaturedListing $featuredListing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FeaturedListing  $featuredListing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FeaturedListing $featuredListing)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FeaturedListing  $featuredListing
     * @return \Illuminate\Http\Response
     */
    public function destroy(FeaturedListing $featuredListing)
    {
        //
    }
}
