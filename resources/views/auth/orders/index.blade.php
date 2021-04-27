@extends('layouts/app')
   
@section('content')
<div class="container pt-5" style="min-height:70vh">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card p-2">
                <table  >
                    <tr>
                        <th ># Заказ</th>
                        <th>Автомобиль</th>
                        <th>Клиент</th>
                        <th class='text-right'>Действие</th>
                    </tr>
                @foreach($orders as $order)
                <tr>
                    <td>{{$order->id}}</td>
                    @foreach($products as $product)
                    @if($product->id==$order->product_id)
                    <td>{{$product->name}}</td>
                      @endif
                      @endforeach
                         @foreach($users as $user)
                    @if($user->id==$order->user_id)
                    <td>{{$user->name}}</td>
                      @endif
                      @endforeach
                    <td>
                        <div class="btn-group  " style="float: right;" role="group">
                           <form action="{{route('orders.destroy',$order)}}" method="POST">
                                <a href="{{route('orders.show',$order->id)}}" class="btn btn-success" >Открыть</a>
                                 <a href="{{route('orders.edit',$order->id)}}" class="btn btn-success" >Редактировать</a>
                                 @if($order->status==0)
                                 @csrf
                                 @method('DELETE')
                                <input class="btn btn-danger"type="submit" value='Удалить'>
                                @endif
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>

            </div> 
        </div>
    </div>
</div>
@endsection