@extends('layout.header')
@section('homeContents')
    @php $sn = 1; @endphp
    <div class="container" style="padding: 2rem 2rem">
        <h1 style="text-align:center">Available Job Description</h1>
        <div class="row justify-content-center mt-5">
            <div class="col-md-10">
                <table class="table" style="font-size: 1.6rem">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Sn</th>
                            <th scope="col">Title</th>
                            <th scope="col">No. of Worker</th>
                            <th scope="col">Salary</th>
                            <th scope="col">Location</th>
                            <th scope="col">Contact name</th>
                            <th scope="col">Contact email</th>
                            <th scope="col">Contact Phoneno.</th>
                            <th scope="col">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jobDetails as $item)
                            <tr>
                                <td>{{ $sn++ }}</td>
                                <td>{{$item->title}}</td>
                                <td>{{$item->Noworker}}</td>
                                <td>{{$item->Salary}}</td>
                                <td>{{$item->location}}</td>
                                <td>{{$item->Cname}}</td>
                                <td>{{$item->Cemail}}</td>
                                <td>{{$item->Cno}}</td>
                                <td>{{$item->description}}</td>
                               
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
