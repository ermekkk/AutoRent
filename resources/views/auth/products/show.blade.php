@extends('layouts/app')
   
@section('content')
<div class="container pt-5" style="min-height:70vh">
    <div class="row justify-content-center">
        
                <div class="col-md-12">
                	<h1>Автомобиль :{{$product->name}}</h1>
                	<table class='table'>
                		<tr>
                			<th>Поле</th>
                				<th >Значение</th>
                		</tr>
                		<tr>
                			<td>ID</td>
                			<td>{{$product->id}}</td>
                		</tr>
                		<tr>
                            <td>Название</td>
                            <td>{{$product->name}}</td>
                        </tr>
                        <tr>
                			<td>Категория</td>
                			<td>{{$product->category->name}}</td>
                		</tr>
                         <tr>
                            <td>Марка</td>
                            <td>{{$product->brand->name}}</td>
                        </tr>
                         <tr>
                            <td>Привод</td>
                            <td>{{$product->homing->name}}</td>
                        </tr>
                         <tr>
                            <td>Коробка передач</td>
                            <td>{{$product->gear->name}}</td>
                        </tr>
                         <tr>
                            <td>Руль</td>
                            <td>{{$product->rudder->name}}</td>
                        </tr>
                		<tr>
                            <td>Цвет</td>
                            <td>{{$product->color}}</td>
                        </tr>
                        <tr>
                            <td>Цена</td>
                            <td>{{$product->price}}</td>
                        </tr>
                        
                		<tr>
                			<td>Описание</td>
                			<td>{{$product->description}}</td>
                		</tr>
                        <tr>
                            <td>Бронь</td>
                            <td>{{$product->rent}}</td>
                        </tr>
                		<tr>
                			<td>Картинка</td>
                			<td><img src="{{Storage::url($product->image)}}" alt='{{$product->name}}' width="300" height="200"></td>
                			
                		</tr>
                	</table>
                </div>
            </div>
      
</div>
@endsection