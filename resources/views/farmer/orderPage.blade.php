@extends('layout.header')
@section('homeContents')
<div  class="container">
   <div class="d-flex" style="gap:20px;">
      <div class="w-25" style="height:500px;">
          <img src="{{ asset('../storage/' . $equip->imgname) }}" class="w-100 h-100" />
      </div>
       <div class="mt-5">
          <h1>{{$equip->toolname}}</h1>
          <p>{{$equip->description}}</p>
          <p>{{$equip->price}}</p>
          <a href="{{route('orderSuccess')}}" class="btn btn-success">Complete Ordering</a>
       </div>
   </div>
</div>
@endsection