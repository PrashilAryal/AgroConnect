@extends('layout.header')
@section('homeContents')
<div class="container w-75">
      <h1 class="mt-4 mb-4" style="text-align:center;">Package Of Praticses</h1>
      <div class="w-50" style="height: 350px;margin:0 auto 50px">
           <img src="{{asset('../images/s1.png')}}" alt="" class="w-100 h-100">
      </div>
      <div class="w-50 mt-3" style="height: 350px;margin:0 auto 50px">
           <img src="{{asset('../images/s2.png')}}" alt="" class="w-100 h-100">
      </div>
      <div class="w-50" style="height: 350px;margin:0 auto 50px">
           <img src="{{asset('../images/s3.png')}}" alt="" class="w-100 h-100">
      </div>   
</div>
@endsection