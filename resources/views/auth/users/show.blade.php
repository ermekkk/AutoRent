@extends('layouts/app')
   
@section('content')
<div class="container pt-5" style="min-height:70vh">
    <div class="row justify-content-center">
        
                <div class="col-md-12">
                    <h1>Пользователь :{{$user->id}}</h1>
                    <table class='table'>
                        <tr>
                            <th>Поле</th>
                                <th >Значение</th>
                        </tr>
                        <tr>
                            <td>ID</td>
                            <td>{{$user->id}}</td>
                        </tr>
                        <tr>
                            <td>Имя</td>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <td>Телефон</td>
                            <td>{{$user->tel}}</td>
                        </tr>
                        <tr>
                            <td> Email</td>
                            <td>{{$user->email}}</td>
                        </tr>
                          
                    </table>
                </div>
                <h1>История заказов</h1>
                 <table class='table'>
                        <tr>
                            <th>Поле</th>
                            <th >Значение</th>
                        </tr>
                @foreach($orders as $order)
                @if($order->user_id==$user->id)
                    
                        <tr>
                            <td>ID заказа</td>
                            <td><a href="{{route('orders.show',$order->id)}}" class="btn btn-success" >{{$order->id}}</a></td>
                        </tr>
                        
                @endif
                @endforeach
</table>
            </div>
      
</div>
@endsection