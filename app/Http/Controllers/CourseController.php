<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    //
    public function postCourse(Request $req){
        $image=$req->file('course_file');
        $response=$image->store('dbimages','public');
        $course=new Course();
        $course->filename=$response;
        $course->title=$req->course_title;
        $course->courseauthor=$req->course_by;
        $course->description=$req->course_description;
        $course->save();
    }
}
