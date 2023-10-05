@extends('government.adminPanel')

@section('adminContent')

<div class="recentorders">

    <div class="profileBody">
        <div class="addRecipe">
            <div class="addRecipeForm" id="addRecipeForm">
                <h1>Add Course</h1>
                <form action="{{route('coursesPost')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="" style="color:black;">Course Photo</label>
                    <div class="editInputBox w50">
                        <input type="file" name="course_file" id="course_file" autocomplete="off" required>
                    </div>
                    <div class="editInputBox w50">
                        <input type="text" name="course_title" id="course_title" autocomplete="off" required>
                        <span>Course Title</span>
                    </div>
                    <div class="editInputBox w50">
                        <input type="text" name="course_by" id="course_by" autocomplete="off" required>
                        <span>Course by</span>
                    </div>
                    <div class="editInputBox w50">
                        <textarea name="course_description" id="course_description" autocomplete="off"
                            required></textarea>
                        <span>About the course...</span>
                    </div>
                    <div class="editInputBox w50">
                        <input type="hidden" name="chef_id" id="chef_id" value="" autocomplete="off" required>
                        <!-- <span>Chef ID</span> -->
                    </div>
                    <div>
                        <input type="submit" value="Add Course" class="btn btn-success" />
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="cardHeader">
        <h2>Courses List</h2>
        {{-- <a href="" class="btn">View All</a> --}}
    </div>
    <table>
        <thead>
            <tr>
                <td>S.N.</td>
                <td>Title</td>
                <td>Description</td>
                <td>Course by</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($courses as $course)
            <tr>
                <td>{{$course->id}}</td>
                <!-- <td><img src="{{asset('/storage/'.$course->filename)}}" alt="" style="width:50px; height:50px; border-radius:50%; object-fill:cover;"></td> -->
                <!-- <td>
                    <video controls style="width:50px; height:50px;">
                    <source src="{{asset('/storage/'.$course->filename)}}" type="video/mp4">
                    </video>
                </td> -->
                <td>{{$course->title}}</td>
                <td>{{$course->courseauthor}}</td>
                <td>{{$course->description}}</td>
                <td>
                    <a class="btn btn-primary" href="/delete/1"> Edit</a>
                    <a class="btn btn-danger" href="/delete/1"> Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection