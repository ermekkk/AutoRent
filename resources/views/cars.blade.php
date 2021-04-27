@extends('master')
@section('title','Автомобили')
@section('content')
<div class=" d-flex align-items-center" style="background: linear-gradient(rgba(2,2,2,.5),rgba(2,2,2,.8)),url('https://images.pexels.com/photos/164634/pexels-photo-164634.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940') fixed center center;
background-size: cover;
  	align-items: center;
  	height:100vh;
    color: white;">
	<div class="container text-center  " style="">
            <div class="display-2 cat-title font-weight-bold">Автомобили</div>
            <div class="h5 fst-italic">У нас Вы найдете желаемый автомобиль </div>
        </div>
	</div>
	  <div class="row  my-5"> 
     
@foreach($products as $product)
  @include('card',compact('product'))
@endforeach
<div class="d-flex justify-content-center">{{ $products->appends(['sort' => 'voices'])->links() }}</div>
</div>
 @endsection
