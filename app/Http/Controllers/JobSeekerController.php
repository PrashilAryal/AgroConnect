<?php

namespace App\Http\Controllers;

use App\Models\JobDescription;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class JobSeekerController extends Controller
{
    public function jobSeekerPage(){
        $data = null;
        if(Session::has('userid')){
            $data = User::find(Session::get('userid'));
        }
        $jobDetails = JobDescription::all();
        return view('jobseeker.jobseeker',compact('data','jobDetails'));
    }
}
