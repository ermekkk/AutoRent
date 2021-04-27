@extends('layouts/app')
   
@section('content')
<div class="container pt-5" style="min-height:70vh">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card p-2">
                <table  >
                    <tr>
                        <th ># </th>
                        <th>Название</th>
                        <th class='text-right'>Действие</th>
                    </tr>
                @foreach($brands as $brand)
                <tr>
                    <td>{{$brand->id}}</td>
                    <td>{{$brand->name}}</td>
                      
                    <td>
                        <div class="btn-group  " style="float: right;" role="group">
                            <form action="{{route('brands.destroy',$brand)}}" method="POST">
                                <a href="{{route('brands.show',$brand->id)}}" class="btn btn-success" >Открыть</a>
                                 <a href="{{route('brands.edit',$brand->id)}}" class="btn btn-success" >Редактировать</a>
                                 @csrf
                                 @method('DELETE')
                                <input class="btn btn-danger"type="submit" value='Удалить'>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>

            </div>
             <a class="btn btn-success mt-3" type='button' href="{{route('brands.create')}}">Создать категорию</a>
        </div>
    </div>
</div>
@endsection