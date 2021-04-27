@extends('layouts/app')
   
@section('content')
<div class="container pt-5" style="min-height:70vh">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card p-2">
                <table  >
                    <tr>
                        <th ># </th>
                        <th>Имя</th>
                        <th class='text-right'>Действие</th>
                    </tr>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                      
                    <td>
                        <div class="btn-group  " style="float: right;" role="group">
                            <form action="{{route('users.destroy',$user)}}" method="POST">
                                <a href="{{route('users.show',$user->id)}}" class="btn btn-success" >Открыть</a>
                               
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