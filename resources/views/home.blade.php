@extends('master')

@section('title','Home')
@section('content')
<div class="container pt-5" style="min-height:70vh">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Приборная панель') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Вы вошли в систему!') }}
                    <a href="{{route('get-logout')}}">Выйти</a>
                    </div>
            </div>
<div class="mt-4 accordion md-accordion" id="accordionEx" role="tablist" aria-multiselectable="true">

  <!-- Accordion card -->
  <div class="card">

    <!-- Card header -->
    <div class="card-header" role="tab" id="headingOne1">
      <a style="text-decoration:none;"data-toggle="collapse" data-parent="#accordionEx" href="#collapseOne1" aria-expanded="true"
        aria-controls="collapseOne1">
        <h5 style="color:black"class="mb-0">
        История заказов
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseOne1" class="collapse show " role="tabpanel" aria-labelledby="headingOne1"
      data-parent="#accordionEx">
      <div class="card-body">
   
             <table class="table">
                    <tr class=''>
                        <th scope="col">#</th>
                        <th scope="col">Автомобиль</th>
                        <th scope="col">Дата выдачи</th>
                        <th scope="col">Дата возврата</th>
                        <th scope="col" class="text-center">Статус</th>

                    </tr>
                 @foreach($orders as $order)
        @if($order->user_id==$user->id)
                <tr>
                    <td >{{$order->id}}</td>
                    @foreach($products as $product)
                    @if($product->id==$order->product_id)
                    <td>{{$product->name}}</td>
                      @endif
                      @endforeach
                      <td>{{$order->get_date}}</td>
                         
                      <td>{{$order->set_date}}</td>
                      @if($order->status==0)
                      <td class='bg-danger text-center' style="color:white">В разработке</td>
                      @else
                      <td class='bg-success text-center 'style="color:white">Оплачено</td>
                      @endif
                      

                    <td>
                    
                    </td>
                </tr>
        @endif

                @endforeach
            </table>
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
         Чеки 
        </h5>
      </a>
    </div>

    <!-- Card body -->
    <div id="collapseTwo2" class="collapse" role="tabpanel" aria-labelledby="headingTwo2"
      data-parent="#accordionEx">
      <div class="card-body">
         @foreach($orders as $order)
        @if($order->user_id==$user->id)
            <div class="bg-primary p-3 mb-2" style='color:white'>
                <p>Имя : {{$user->name}}</p>
                <p>Автомобиль : @foreach($products as $product)
                    @if($product->id==$order->product_id)
                    {{$product->name}}
                      @endif
                      @endforeach</p>
                <p>Дата получения : {{$order->set_date}}</p>
                <p>Дата возврата : {{$order->get_date}}</p>
                
                <p>Адресс получения авто : @foreach($getcar as $getcars)
                    @if($getcars->id==$order->getcar_id)
                    {{$getcars->name}}
                      @endif
                      @endforeach</p>

                @if($order->getcar!="")
                <p>Адресс получения авто : {{$order->getcar}}</p>

                @endif
                 <p>Адресс возврата авто : @foreach($returncar as $returncars)
                    @if($returncars->id==$order->returncar_id)
                    {{$returncars->name}}
                      @endif
                      @endforeach</p>

                @if($order->returncar!="")
                <p>Адресс получения авто : {{$order->returncar}}</p>

                @endif
                 @foreach($pays as $pay)
                    @if($pay->id==$order->pay_id)
                <p>Оплата :{{$pay->name}} </p>
                <p>Счет :{{$pay->pay}} </p>

                      @endif
                      @endforeach
<p>Всего : {{$order->total}}</p>
                



            </div>
        @endif
        @endforeach
      </div>
    </div>

 
  <!-- Accordion card -->

  <!-- Accordion card -->
  
  <!-- Accordion card -->

</div></div>
<!-- Accordion wrapper -->

        </div>
    </div></div>
                    
<!--Accordion wrapper-->

                

@endsection
