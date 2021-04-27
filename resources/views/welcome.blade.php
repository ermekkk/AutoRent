@extends('master')
@section('title','Главная')
@section('content')
<section class="cta  d-flex align-items-center">
        <div class="container text-center  ">
            <span class="display-2 font-weight-bold ">ПРОКАТ АВТО В БИШКЕКЕ</span><br>
           <p class="h4 ">Мы любим свою работу и буквально живем этим делом. Официальный сайт <span  style="color:var(--main-color)">Auto</span>Rent знает, как для Вас важно получить надежную машину, поэтому мы имеем собственный авто парк. </p>
            
            <br><a href="{{ route('login') }}" class="btn  btn-lg btn-outline-light" >Авторизация</a>
             <br><br><a href="{{ route('register') }}" class="btn  btn-lg btn-outline-light" >Регистрация</a>
        </div>
</section>
<section name="ab" class="about my-5" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-1 order-lg-2">
                    <img class="img-fluid" src="https://images.pexels.com/photos/3183150/pexels-photo-3183150.jpeg?auto=compress&amp;cs=tinysrgb&amp;dpr=1&amp;w=500" alt="Word Of Sites">
                </div>
                <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 content">
                    <h1>О нас</h1>
                    <p class="font-italic ">
Чем мы отличаемся от других?

Наша миссия-сделать прокат автомобилей комфортным, как для бизнеса, так и для семьи. Упростите жизнь клиентам, пользующимся нашим сервисом. Для этого мы руководствуемся такими принципами, как честность, прозрачность и доверие.

Наша главная ценность-надежность и безопасность!

По общему признанию, никто из нас не покупает товары или услуги. Мы всегда приобретаем способности. Какие возможности мы можем вам предложить?


Именно поэтому многие люди уже оценили качество нашего сервиса.

AutoRent получает самые высокие рекомендации от наших Клиентов, которые мотивируют нас продолжать улучшать качество наших услуг
                    </p>
                    
                </div>
            </div>
        </div>
    </section>
<section class="ctb  d-flex align-items-center">
        <div class="container text-center  ">
            <span class="display-2 font-weight-bold ">Заказать звонок</span><br>
           <p class="h4 ">Оставьте свои данные и мы Вам обязательно перезвоним</p>
           <div class="modal-dialog">
            <div class="modal-content form-modal" style="">
                <div class="modal-header text-center">              
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                         <div class="row mb-3">
                            <label for="inputName" class="label col-sm-2 col-form-label">
                                Имя
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" id="inputName" placeholder="Максат">
                            </div>
                         </div>
                         <div class="row mb-3">
                            <label for="inputPhone" class="label col-sm-2 col-form-label">
                                Телефон 
                            </label>
                            <div class="col-sm-10">
                                <input type="text" name="tel" class="form-control" id="inputPhone" placeholder="+996555555555">
                            </div>
                         </div>
                    
                </form></div>
                <div class="modal-footer ">
                    <button class="btn btn-light" type="submit" name="submit">Отправить</button>
                </div>

            </div>
        </div>
        </div>
</section>         
   @endsection