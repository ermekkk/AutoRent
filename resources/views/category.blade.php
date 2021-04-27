@extends('master')
@section('title','Категория:' .$category->name)
@section('content')
<div class=" d-flex align-items-center" style="background: linear-gradient(rgba(2,2,2,.5),rgba(2,2,2,.8)),url({{Storage::url($category->image)}}) fixed center center;
background-size: cover;
  	align-items: center;
  	height:100vh;
    color: white;">
	<div class="container text-center  " style="">
            <div class="display-2 cat-title font-weight-bold">{{$category->name}}</div>
            <div class="h5 fst-italic">{{$category->description}}</div>
        	<span class="h5 fst-italic ">Всего машин : {{$category->products->count()}}</span>
        </div>
	</div>
	  
      @if($category->products->count()!=0)
      <div class="row  my-5"> 
	  @foreach($category->products as $product)
  @include('card',compact('product'))
@endforeach
</div>

@endif
 @endsection
