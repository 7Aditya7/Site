@extends('layouts.app')
@section('title', 'Users')

@section('content')
<div class="container">
<div class="row">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title text-center" >Users</h3>
            </div>
        <div class="well">
            <hr>
            <a href="/user/create" class="btn btn-success" style="color:white;">Register User</a>
            <hr>
        </div>
            <table class="table text-white">
                <thead>
                    <tr class="filters">
                        <th><input type="text" class="form-control" placeholder="ID No" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Name" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Email" disabled></th>
                        <th><input type="text" class="form-control" placeholder="Created At" disabled></th>
                        <th colspan="2"><input type="text" class="form-control text-center" placeholder="Action" disabled></th>
                    </tr>
                </thead>
                <tbody>
                    @if(count($Users)> 0)
                    @foreach($Users as $User)

                    <tr>
                        <td>{{$User->id}}</td>
                        <td>{{$User->name}}</td>
                        <td>{{$User->email}}</td>
                        <td>{{$User->created_at}}</td>
                        <td><a href="/user/{{$User->id}}">View Details</a></td>
                        <td>
                        {!!Form::open(['action' => ['UserController@destroy', $User->id], 'method' => 'POST'])!!}
                        {{Form::hidden('_method', 'DELETE' )}}
                        {{Form::submit('Delete', ['class' => 'btn btn-danger '])}}
                        {!!Form::close()!!}</td>
                    </tr>
                    @endforeach
                        <div class="text-center"> {{$Users->links()}}</div>
                    @else
                    <tr>
                        <td>User Data Empty</td>
                        <td>User Data Empty</td>
                        <td>User Data Empty</td>
                        <td>User Data Empty</td>
                    </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection