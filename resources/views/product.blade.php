@extends('master')
@section('title',$product->name)
@section('content')
<div class="pt-4">
	<div class="container dark-grey-text mt-3">
		<div class="row wow fadeIn">
			<div class="col-md-6 mb-4">
				<img src="{{Storage::url($product->image)}}" style="border-radius:10px" alt="{{$product->name}}" class='w-100'>
			</div>
			<div class="col-md-6 mb-4">
				<div class="">
					<h1>{{$product->name}} , {{$product->year}}</h1>
					<p class="lead">
						<span class="mr-1">
							<span class="fw-bold">{{$product->price}} сом </span>/ сутки
						</span>
					</p>	
          @if($product->rent==0)	
					<form action="{{Route('addOrder',[$product->id])}}" method="POST">
                             <button type="submit"class=" btn  btn-outline-primary" >Забронировать<i class="fa fa-car ml-1"></i></button>
                             @csrf
                        </form>
                        @else
                        <button type="submit"class=" btn  btn-outline-primary" >Занята<i class="fa fa-car ml-1"></i></button>
                        @endif

				</div>
			</div>
		</div>
	</div>
</div>
<div class="container mb-5">
<!--Accordion wrapper-->
<div class="accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingOne1">
      <a style="text-decoration:none;"data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
        aria-controls="collapseOne1">
        <h5 style="color:black"class="mb-0">
          Описание <i style="float:right"class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne1" class="collapse show " role="tabpanel" aria-labelledby="headingOne1"
      data-parent="#accordionEx">
      <div class="card-body">
       {{$product->description}}
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingTwo2">
      <a style="text-decoration:none;"class="collapsed" data-toggle="collapse" data-parent="#accordionEx" href="#collapseTwo2"
        aria-expanded="false" aria-controls="collapseTwo2">
        <h5 style="color:black"class="mb-0">
         Характеристика <i style="float:right"class="fas fa-angle-down rotate-icon"></i>
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
      data-parent="#accordionEx">
      <div class="card-body">
       <table class="table table-striped">
  <thead>
  </thead>
  <tbody>
    <tr>
      <td class="card-info">Коробка</td>
      <td class='text-right' >{{$product->gear->name}}</td>
     </tr>
     <td class="card-info">Марка</td>
      <td class='text-right' >{{$product->brand->name}}</td>
     </tr>
     <tr>
      <td class="card-info">Кузов</td>
       <td class='text-right' >{{$product->category->name}}</td>
  </tr>
   <tr>
      <td class="card-info">Привод</td>
       <td class='text-right' >{{$product->homing->name}}</td>
  </tr>
  <tr>
      <td class="card-info">Руль</td>
       <td class='text-right' >{{$product->rudder->name}}</td>
  </tr>
      <tr>
      <td class="card-info">Цвет</td>
       <td class='text-right' >{{$product->color}}</td>
  </tr>
      <tr>
      <td class="card-info">Год</td>
       <td class='text-right' >{{$product->year}}</td>
  </tr>   
  </tbody>
</table>
      </div>
    </div>

  </div>
  <!-- Accordion card -->

  <!-- Accordion card -->
  
  <!-- Accordion card -->

</div>
<!-- Accordion wrapper -->
</div>
 @endsection
