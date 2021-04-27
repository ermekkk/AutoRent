@extends('layouts/app')
   @isset($product)
   @section('title','Редактировать категорию ' . $product->name)
   @else
@section('title','Создать автомобиль')
   @endisset
@section('content')
	<div class="col-md-12">
		   @isset($product)
  			<h1>Редактировать автомобиль {{$product->name}}</h1>
  			 @else
			<h1>Добавить категорию</h1>
  			 @endisset
			
		
		<form  method="POST" enctype='multipart/form-data'
			@isset($product)
			action="{{route('products.update',$product)}}"
			@else
			action="{{route('products.store')}}"
			@endisset
		>
		@isset($product)
			@method('PUT')
		@endisset
			<div class="">
				@csrf
				<div class="input-group row">
					@error('name')
							<div class="alert alert-danger">{{$message}}</div>
						@endif
					<label for='name' class="label">Название:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="name" id='name' value="@isset($product){{$product->name}}	@endisset
						">
					</div>
				</div>
				<div class="input-group row">

					<label for='name' class="label">Категория:</label>
					<div class="col-sm-6">
						<select name="category_id" id="category_id" class='form-control'>
							@foreach($categories as $category)
							<option value="{{$category->id}}"
							@isset($product)
								@if($product->category_id== $category->id)
								selected	
								@endif
							@endisset
							>{{$category->name}}</option>
							@endforeach

						</select>
					</div>
				</div>

					<div class="input-group row">
					<label for='name' class="label">Марка:</label>
					<div class="col-sm-6">
						<select name="brand_id" id="brand_id" class='form-control'>
							@foreach($brands as $brand)
							<option value="{{$brand->id}}"
							@isset($product)
								@if($product->brand_id== $brand->id)
								selected	
								@endif
							@endisset
							>{{$brand->name}}</option>
							@endforeach

						</select>
				
					</div>
				</div>

					<div class="input-group row">
					<label for='name' class="label">Руль:</label>
					<div class="col-sm-6">
						<select name="rudder_id" id="rudder_id" class='form-control'>
							@foreach($rudders as $rudder)
							<option value="{{$rudder->id}}"
							@isset($product)
								@if($product->rudder_id== $rudder->id)
								selected	
								@endif
							@endisset
							>{{$rudder->name}}</option>
							@endforeach
						</select>
					</div>
				</div>

					<div class="input-group row">
					<label for='name' class="label">Привод:</label>
					<div class="col-sm-6">
						<select name="homing_id" id="homing_id" class='form-control'>
							@foreach($homings as $homing)
							<option value="{{$homing->id}}"
							@isset($product)
								@if($product->homing_id== $homing->id)
								selected	
								@endif
							@endisset
							>{{$homing->name}}</option>
							@endforeach
						</select>
					</div>
				</div>

					<div class="input-group row">
					<label for='name' class="label">Коробка передач:</label>
					<div class="col-sm-6">
						<select name="gear_id" id="gear_id" class='form-control'>
							@foreach($gears as $gear)
							<option value="{{$gear->id}}"
							@isset($product)
								@if($product->gear_id== $gear->id)
								selected	
								@endif
							@endisset
							>{{$gear->name}}</option>
							@endforeach
						</select>
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
						>@isset($product){{$product->description}}	@endisset
						</textarea>
					</div>
				</div>


				<br>
					<div class="input-group row">
						@error('price')
							<div class="alert alert-danger">{{$message}}</div>
						@endif
					<label for='description' class="label">Цена:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="price" id='price' value="@isset($product){{$product->price}}	@endisset
						">
					</div>
				</div>


				
				<br>

					<div class="input-group row">
						@error('color')
							<div class="alert alert-danger">{{$message}}</div>
						@endif
					<label for='description' class="label">Цвет:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="color" id='color' value="@isset($product){{$product->color}}	@endisset
						">
					</div>
				</div>
				

				
				<br>
					<div class="input-group row">
						@error('year')
							<div class="alert alert-danger">{{$message}}</div>
						@endif
					<label for='description' class="label">Год:</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="year" id='year' value="@isset($product){{$product->year}}	@endisset
						">
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