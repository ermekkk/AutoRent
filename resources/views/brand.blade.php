@extends('master')
@section('title','Категория:')
@section('content')
<div class=" d-flex align-items-center" style="background: linear-gradient(rgba(2,2,2,.5),rgba(2,2,2,.8)),url({{Storage::url($brand->image)}}) fixed center center;
background-size: cover;
  	align-items: center;
  	height:100vh;
    color: white;">
	<div class="container text-center  " style="">
            <div class="display-2 cat-title font-weight-bold">{{$brand->name}}</div>
            <div class="h5 fst-italic">{{$brand->description}}</div>
            <span class="h5 fst-italic ">Всего машин : {{$brand->products->count()}}</span>
        </div>
	</div>
	<div class="row  my-5"> 
	  	@foreach($brand->products as $product)
  @include('card',compact('product'))
@endforeach
	</div>
 @endsection
