@extends('layouts/app')
  
   @section('title','Редактировать заказ ' . $order->id)
 
@section('content')
	<div class="col-md-12">
	  			<h1>Редактировать заказ {{$order->id}}</h1>
  				
		<form  method="POST" enctype='multipart/form-data'
			action="{{route('orders.update',$order)}}"
		>
					@method('PUT')

			<div class="">
				@csrf
				@if($order->status==0)
		<button class='btn btn-success'>Оплаченно</button>
		@else
		<button class='btn btn-success'>Завершенно</button>
		@endif

			</div>
		</form>		
	</div>
@endsection