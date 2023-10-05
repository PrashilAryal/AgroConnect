@extends('layout.header')
@section('homeContents')
@php $sn =1 @endphp
<div class="container w-75">
    <form action="{{route('postequipment')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name" class="fs-3 mt-3">Name:</label>
            <input type="text" id="name" name="toolname" class="form-control fs-3" required />
        </div>
        <div class="form-group">
            <label for="description" class="fs-3 mt-3">Description:</label>
            <textarea id="description" name="description" class="form-control fs-3" required></textarea>
        </div>
        <div class="form-group">
            <label for="price" class="fs-3 mt-3">Price:</label>
            <input type="number" id="price" name="price" class="form-control fs-3" required>
        </div>
        <div class="form-group">
            <label for="file" class="fs-3 mt-3">Add Image</label>
            <input type="file" id="file" name="image" class="form-control-file fs-3" accept=".pdf,.jpg,.png" required>
        </div>
        <button type="submit" class="btn btn-primary fs-3 mt-3">Add</button>
    </form>
    <div class="mt-5">
        <table class="table">
            <thead class="table-light">
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $item)
                <tr>

                    <th>{{$sn++}}</th>
                    <th>{{$item->toolname}}</th>
                    <th>{{$item->description}}</th>
                    <th>{{$item->price}}</th>
                    <th><img src="{{asset('storage/' . $item->imgname)}}" style="height:100px;width:100px;" alt=""></th>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection