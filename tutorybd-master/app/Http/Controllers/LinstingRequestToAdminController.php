<?php

namespace App\Http\Controllers;

use App\FeaturedListing;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\InstructorSetting;
use App\User;
use Auth;
use Illuminate\Support\Facades\DB;


class LinstingRequestToAdminController extends Controller
{
    public function index()
    {
        //$tests=DB::table('featured_listings');

        $tests=FeaturedListing::all();
        //dd($tests);
        return view('admin.instructor.feature_request.index', compact('tests'));
    }
    public function edit($id)
    {
        $show = FeaturedListing::where('id', $id)->first();
        //dd($show);
        return view('admin.instructor.feature_request.view',compact('show'));
    }
    public function update(Request $request ,$id)

    {

        try{
            $updateData=FeaturedListing::where('id', $id)->first();
            $input=$request->all();
            $updateData->update($input);

            //dd($input);
           // $id->update($updateData);
          return redirect()->route('listingRequested.index')->with('message', 'Data has been updated successfully');
       }
       catch(QueryException $e){
           return redirect()->back()->withInput()->withErrors($e->getMessage());
       }
    }



    public function destroy($id)
    {
        DB::table('featured_listings')->where('id',$id)->delete();
        return redirect()->route('listingRequested.index');
    }
    public function allListing()
    {
        $items = FeaturedListing::all();
        //dd($items);
        return view('admin.instructor.feature_request.list',compact('items'));
    }
}
