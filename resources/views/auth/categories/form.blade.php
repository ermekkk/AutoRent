@extends('layouts/app')
   @isset($category)
   @section('title','Редактировать категорию ' . $category->name)
   @else
@section('title','Создать категорию')
   @endisset
@section('content')
	<div class="col-md-12">
		   @isset($category)
  			<h1>Редактировать категорию {{$category->name}}</h1>
  			 @else
			<h1>Добавить категорию</h1>
  			 @endisset
			
		
		<form  method="POST" enctype='multipart/form-data'
			@isset($category)
			action="{{route('categories.update',$category)}}"
			@else
			action="{{route('categories.store')}}"
			@endisset
		>
		@isset($category)
			@method('PUT')
		@endisset
			<div class="">
				@csrf
				<input type="hidden">
				<div class="input-group row">
					<label for='code' class="label">Код:</label>
					<div class="col-sm-6">
						@error('code')
							<div class="alert alert-danger">{{$message}}</div>
						@endif
						<input type="text" class="form-control" name="code" id='code' value="@isset($category){{$category->code}}	@endisset
						">
					</div>
				</div>
				<br>
				<div class="input-group row">
					<label for='name' class="label">Название:</label>
					<div class="col-sm-6">
						@error('name')
							<div class="alert alert-danger">{{$message}}</div>
						@endif
						<input type="text" class="form-control" name="name" id='name' value="@isset($category){{$category->name}}	@endisset
						">
					</div>
				</div>
				<br>
				<div class="input-group row">
					@error('description')
							<div class="alert alert-danger">{{$message}}</div>
						@endif
					<label for='description' class="label">Описание:</label>
					<div class="col-sm-6">
						<textarea  cols="72" rows="7"class="form-control" name="description" id='description' 
						>@isset($category){{$category->description}}	@endisset
						</textarea>
					</div>
				</div>
				<br>
				<div class="input-group row">
					@error('image')
							<div class="alert alert-danger">{{$message}}</div>
						@endif
					<label for="image" class="label">Картинка:</label>
					<div class="col-sm-6">
						<label for="" class="btn btn-default btn-file">
							Загрузить <input type="file"  id='image' name='image'>
						</label>
					</div>
				</div>
				<button class='btn btn-success'>Сохранить</button>
			</div>
		</form>
	</div>
@endsection