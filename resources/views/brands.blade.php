@extends('master')
@section('title','Бренды')
@section('content')
<div class="div-about d-flex align-items-center">
	<div class="container text-center  ">
            <div class="display-2 cat-title font-weight-bold">Бренды</div>
        </div>
	</div>
<div class="container">

    <div class="row  my-5"> 
@foreach($brands as $brand)
        <div class="col-lg-4 col-md-6 ">
            <div  class="card-cat card mx-auto mb-3" style="max-width: 300px;">
                <!-- Изображение -->
                <a class="card-a" href="{{route('brand',$brand->id)}}"><img class="card-img-top" height="200" src="{{Storage::url($brand->image)}}" alt="{{$brand->name}}-AutoRent"></a>
                <!-- Текстовый контент -->
                <div class="card-body">
                    <h4 class="card-title"><a  class="card-b" href="{{route('brand',$brand->id)}}" style="">{{$brand->name}}</a></h4>
                    <p class="card-text">{{ \Illuminate\Support\Str::limit($brand->description,100,"...")}}</p>
                    <a href="{{route('brand',$brand->id)}}" class="btn btn-primary">Перейти</a>
                </div>
            </div><!-- Конец карточки -->
        </div>

@endforeach
<div class="d-flex justify-content-center">{{ $brands->appends(['sort' => 'voices'])->links() }}</div>
   </div>
</div>
 @endsection