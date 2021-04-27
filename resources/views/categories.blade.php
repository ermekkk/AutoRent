@extends('master')
@section('title','Все категории')
@section('content')
<div class="div-about d-flex align-items-center">
	<div class="container text-center  ">
            <div class="display-2 cat-title font-weight-bold">Категории</div>
        </div>
	</div>
<div class="container">

    <div class="row  my-5"> 
@foreach($categories as $category)
 		<div class="col-lg-4 col-md-6 ">
            <div  class="card-cat card mx-auto mb-3" style="max-width: 300px;">
                <!-- Изображение -->
                <a class="card-a" href="{{route('category',$category->id)}}"><img class="card-img-top" height="200" src="{{Storage::url($category->image)}}" alt="{{$category->name}}-AutoRent"></a>
                <!-- Текстовый контент -->
                <div class="card-body">
                    <h4 class="card-title"><a  class="card-b" href="{{route('category',$category->id)}}" style="">{{$category->name}}</a></h4>
                    <p class="card-text">{{ \Illuminate\Support\Str::limit($category->description,100)}}</p>
                    <a href="{{route('category',$category->id)}}" class="btn btn-primary">Перейти</a>
                </div>
            </div><!-- Конец карточки -->
        </div>

@endforeach
<div class="d-flex justify-content-center">{{ $categories->appends(['sort' => 'voices'])->links() }}</div>
   </div>
</div>
 @endsection