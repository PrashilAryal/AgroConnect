<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class GovernmentController extends Controller
{
    //
    public function adminDashboardPage(){
        return view('government.adminDashboard');
    }
    public function adminViewCoursesPage(){
        $courses=Course::all();
        return view('government.viewCourses',compact('courses'));
    }
    public function loanRequestPage(){
        return view('government.loanRequest');
    }

    public function adminMarketPricePage(){
        return view('government.adminMarketPrice');
    }
}