@extends('layouts/app')
   
@section('content')
<div class="container pt-5" style="min-height:70vh">
    <div class="row justify-content-center">
        
                <div class="col-md-12">
                	<h1>Заказ :{{$order->id}}</h1>
                	<table class='table'>
                		<tr>
                			<th>Поле</th>
                				<th >Значение</th>
                		</tr>
                		<tr>
                			<td>ID</td>
                			<td>{{$order->id}}</td>
                		</tr>
                		<tr>
                			<td>Автомобиль</td>
                			<td>{{$product->name}}</td>
                		</tr>
                		<tr>
                			<td>Пользователь</td>
                			<td>{{$user->name}}</td>
                		</tr>
                		<tr>
                			<td>Адрес местожительства</td>
                			<td>{{$order->addres}}</td>
                		</tr>
                            <tr>
                            <td>Дата получения</td>
                            <td>{{$order->get_date}}</td>
                        </tr>
                            <tr>
                            <td>Дата возвращения</td>
                            <td>{{$order->set_date}}</td>
                        </tr>
                            <tr>
                            <td>Город</td>
                            <td>{{$city->name}}</td>
                        </tr>
                            <tr>
                            <td>Страна</td>
                            <td>{{$country->name}}</td>
                        </tr>
                		  <tr>
                            <td>Адрес выдачи</td>
                          <td>{{$getcar->name}}</td>
                        </tr>
                        @if($order->getcar!="")
                        <tr>
                            <td>Адрес выдачи</td>
                          <td>{{$order->getcar}}</td>
                        </tr>
                        @endif
                            <tr>
                            <td>Адрес возврата</td>
                            <td>{{$returncar->name}}</td>
                        </tr>
                         @if($order->returncar!="")
                        <tr>
                            <td>Адрес выдачи</td>
                          <td>{{$order->returncar}}</td>
                        </tr>
                        @endif
                 <tr>
                            <td>Оплата</td>
                          <td>{{$pay->name}}</td>
                        </tr>



                          <tr>
                            <td>Цена авто</td>
                          <td>{{$product->price}}</td>
                        </tr>
                            <tr>
                            <td>Всего</td>
                            <td>{{$order->total}}</td>
                        </tr>
                        
                        </tr>
                            <tr>
                            <td>Статус</td>
                            @if($order->status==0)
                            <td class='bg-danger text-white'>В разработке</td>
                            @else
                            <td class='bg-success text-white'>Оплачено</td>
                            @endif
                        </tr>
                        
                	</table>
                </div>
            </div>
      
</div>
@endsection