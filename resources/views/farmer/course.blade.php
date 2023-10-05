@extends('layout.header')
@section('homeContents')
<div class="container w-75 mt-5">
    <div class="w-100">
        @foreach($courses as $course)
        <div class="d-flex border-bottom p-4" style="height:300px;gap:20px">
            <div class="w-50 h-100 position-relative border">
                <video controls class="w-100 h-100">
                    <source src="{{asset('/storage/'.$course->filename)}}" type="video/mp4">
                </video>
            </div>
            
            <div class="w-50" style="margin-top:3rem; margin-right:12rem;">  
                <h2 style="font-size:2rem;">{{$course->title}}</h2>
                <p class="text-secondary" style="font-size:1.5rem;">{{$course->description}}</p>
                <button class="btn btn-primary">Play Video</button>


        </div>
    </div>
        @endforeach
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

@endsection
