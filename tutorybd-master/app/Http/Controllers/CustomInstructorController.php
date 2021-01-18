<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Order;
use App\Course;
use Auth;
use Illuminate\Support\Facades\DB;

class CustomInstructorController extends Controller
{
    public function index(Request $request)
    {
        $tests=DB::table('users')
            ->leftJoin('courses', 'users.id', '=', 'courses.user_id')
            ->select(DB::raw('COUNT(courses.id) AS count, users.id AS instructor_id ,users.fname As fname,users.lname As lname' ))
            ->where('users.role', '=', 'instructor')
            ->groupBy('users.id')
            ->get();
        //dd($tests);
        $lists = User::where('role','instructor')->with('courses')->get();
////       $subs=User::with('courseclass')->get();
     // dd($lists);
        return view('CustomByMashrat.index', compact('lists','tests'));
    }
}
