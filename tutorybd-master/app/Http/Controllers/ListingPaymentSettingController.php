<?php

namespace App\Http\Controllers;

use App\ListingPaymentSetting;
use Illuminate\Http\Request;

class ListingPaymentSettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pays=ListingPaymentSetting::all();
        return redirect()->route('featureListing.index',compact('pays'));
        //dd($pays);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ListingPaymentSetting  $listingPaymentSetting
     * @return \Illuminate\Http\Response
     */
    public function show(ListingPaymentSetting $listingPaymentSetting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ListingPaymentSetting  $listingPaymentSetting
     * @return \Illuminate\Http\Response
     */
    public function edit(ListingPaymentSetting $listingPaymentSetting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ListingPaymentSetting  $listingPaymentSetting
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ListingPaymentSetting $listingPaymentSetting)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ListingPaymentSetting  $listingPaymentSetting
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListingPaymentSetting $listingPaymentSetting)
    {
        //
    }
}
