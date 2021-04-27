@extends('master')
@section('title','Оформление заказа')
@section('content')
 @auth
<div class=" d-flex align-items-center" style="background: linear-gradient(rgba(2,2,2,.5),rgba(2,2,2,0)),url('https://images.pexels.com/photos/2058853/pexels-photo-2058853.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940') fixed center center;
background-size: cover;
  	align-items: center;
  	height:50vh;
    color: white;">
	</div>
		 <form method='POST' action="{{route('create')}}"  enctype='multipart/form-data'class="needs-validation" >
@csrf
	<div class="container mt-4 d-flex justify-content-center" >
	
      <div class="col-10  ">
      
			<div class="">
				
        <h3 class="mb-3">Оформление заказа {{$product->name}}</h3>
       
          <div class="row g-3" style='justify-content: space-between'>
            <div class="col-12">
              <label for="address" class="form-label">Адрес</label>
              <input type="text" class="form-control"name="address" id='address' placeholder="ул. Фокина" required>
              <div class="invalid-feedback">
                Пожалуйста, введите свой адрес доставки.
              </div>
            </div>
            
            <input type='number'name="total" value='{{$product->price}}'style="display:none;">

            
 <div class="col-md-5">
              <label for="country" class="form-label">Страна</label>
              <select class="form-select" id="country_id" name='country_id' required="">
            @foreach($countries as $country)
							<option value="{{$country->id}}">{{$country->name}}</option>
		        	@endforeach
            
              </select>              
           
            </div>

            <div class="col-md-5">
              <label for="city" class="form-label">Город</label>
              <select class="form-select" id="city_id" name="city_id"required="">
                 @foreach($cities as $city)
							<option value="{{$city->id}}">{{$city->name}}</option>
			@endforeach
              </select>              
            </div>
       
          </div>

        
          <hr class="my-4">

		<div class='' style='justify-content: space-between'>	
 <div class="col-md-5">
            <label for="date" class="form-label" >Дата выдачи</label><br>
              <input type="date" id="datebegin" name='getdate' required>            
            </div>

            <div class="col-md-5">
              <label for="date" class="form-label"  required>Дата возврата</label><br>
              <input type="date" id='datefinish'name='setdate' required>            
            </div>        
            </div>

          <hr class="my-4">
<div class="row" style='justify-content: space-between'>
		<div class="col-md-5 ">
			
              <label for="country" class="form-label">Адрес выдачи</label>
              <select class="form-select" id="mySelect1" name='getcar_id' required="">
                  @foreach($getcarids as $getcarid)
							<option value="{{$getcarid->id}}">{{$getcarid->name}}</option>
			@endforeach
              </select>   
                <input type="text" style='display:none'class="form-control mt-3 mySelect" id="address_get" name='getcar' placeholder="Укажите адрес "value=' ' >
                    
            </div>
            <div class="col-md-5 " >
            	
              <label for="country" class="form-label">Адрес возврата</label>
              <select class="form-select" name='returncar_id'  id="mySelect2"required>
                  @foreach($returncarids as $returncarid)
							<option value="{{$returncarid->id}}">{{$returncarid->name}}</option>
			@endforeach
              </select>   
                <input type="text" name='returncar'style='display:none' class="form-control mt-3 mySelect" id="address_get2" placeholder="Укажите адрес "value=' ' >
                    
            </div>
</div>
                      <hr class="my-4">
		

<button id='calculateorder'class="btn btn-lg w-100 btn-primary" type='button'>Рассчитать</button>
       <div class='mt-3'>
       		<span class='h4'>Итого :<span id="totalOrder"></span> сом<br> </span>
       		
       </div>
          
          <hr class="my-4">          
<input type='hidden' name='user_id' value='{{$user->id}}'>
<input type='hidden' name='product_id' value='{{$product->id}}'>

          <h4 class="mb-3">Оплата</h4>

          <div class="my-3">
            <div class="form-check">
               @foreach($pays as $pay)
              <input name="pay_id" type="radio" value="{{$pay->id}}"   class="form-check-input" checked="" id='{{$pay->id}}' >
              {{$pay->name}}<br>
              @endforeach
            </div>
            
            
          </div>

          <input name='days' >

          <hr class="my-4">

          <button id='ord' class="w-100 btn btn-primary btn-lg mb-3" >Забронировать</button>
        
      </div>
    </div></div>
 </form>
 @else
 <div class=" d-flex align-items-center" style="background: linear-gradient(rgba(2,2,2,.5),rgba(2,2,2,0)),url('https://images.pexels.com/photos/2058853/pexels-photo-2058853.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940') fixed center center;
background-size: cover;
  	align-items: center;
  	height:100vh;
    color: white;">
	<div class="container text-center  " style="">
            <div class="h2 fst-italic">Для оформления заказа необходимо <a style="color:white"href="{{Route('login')}}">авторизоваться </a>.</div> 
        </div>
	</div>
 @endif
		<script>
			let totalOrder=document.getElementById('totalOrder')
			totalOrder.innerHTML={{$product->price}}
			let datebegin=document.getElementById('datebegin');
       			let datefinish=document.getElementById('datefinish');
       			let price={{$product->price}} ;
       			let dostavka=document.getElementsByClassName('dostavka');
       			let finish=document.getElementsByClassName('finish');
       			let calculateorder=document.getElementById('calculateorder');
       			calculateorder.addEventListener('click',function(){
       			console.log('1');
       			
       					let days1=datefinish.valueAsNumber/86400000;
       					let days2=datebegin.valueAsNumber/86400000;
       					let day=days1-days2;
       					console.log(days1);
       					console.log(days2);
       					console.log(day);
       					
  						let total=price*day;	
  						totalOrder.innerHTML=total;
       				})
            let ord=document.getElementById('ord');
            ord.addEventListener('click',function(){
              let days1=datefinish.valueAsNumber/86400000;
                let days2=datebegin.valueAsNumber/86400000;
                let day=days1-days2;
                console.log(days1);
                console.log(days2);
                console.log(day);
            })

       		      		</script>
@endsection