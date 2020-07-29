@extends('layouts.app')
@section('title', 'form_register')
@section('content')
<div class="container">
        <div class="text-center">
            <h1>Secretary Form</h1>
        </div>
        <a href="/" class="btn btn-default">Go Back</a>
        <hr>
          
		{!! Form::open(['action' => 'FormController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
            <div class="form-group">
                    {{Form::label( 'title' , 'Prefix' )}}
                    {{Form::text('prefix','',['class' => 'form-control col-md-5', 'placeholder' => 'prefix'])}}
            </div> 
            @error('prefix')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror
            <div class="form-group">
                    {{Form::label( 'title' , 'Email' )}}
                    {{Form::email('email','',['class' => 'form-control col-md-5', 'placeholder' => 'Enter your email'])}}
            </div>
            @error('email')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror
            <div class="form-group">
                    {{Form::label( 'title' , 'First Name' )}}
                    {{Form::text('first_name','',['class' => 'form-control col-md-5', 'placeholder' => 'Enter your First name'])}}
            </div>
            @error('first_name')
                     <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror 
            <div class="form-group">
                    {{Form::label( 'title' , 'Last Name' )}}
                    {{Form::text('last_name','',['class' => 'form-control col-md-5', 'placeholder' => 'Enter your Last name'])}}
            </div>
            @error('last_name')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror

             <div class="form-group">
                    {{Form::label( 'title' , 'Contact number' )}}
                    {{Form::number ('contact_number','',['class' => 'form-control col-md-5', 'placeholder' => 'Contact number'])}}
            </div>
            @error('contact_number')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror 
             <div class="form-group">
                    {{Form::label( 'title' , 'Address' )}}
                    {{Form::text( 'address','',['class' => 'form-control col-md-5', 'placeholder' => 'Address'])}}
            </div>
            @error('address')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror
             <div class="form-group">
                    {{Form::label( 'title' , 'Blood group' )}}
                    {{Form::text( 'blood_group','',['class' => 'form-control col-md-5', 'placeholder' => 'Blood Group'])}}
            </div>
            @error('blood_group')
            <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror     

            <div class="form-group">
                    {{Form::label( 'title' , 'Membership Number' )}}
                    {{Form::number( 'memb_number','',['class' => 'form-control col-md-5', 'placeholder' => 'Membership Number'])}}
            </div>
            @error('memb_number')
                    <div class="alert alert-danger col-md-5">
                        {{$message}}
                    </div>
                    @enderror 



            <div class="form-group">
                {{Form::label('title','Formal Photo [Optional]')}}<br>
                {{Form::File('formal_photo')}}
            </div> 
          
            {{Form::submit('Submit Form', ['class' => 'btn btn-primary', 'style'=> 'margin-left:16%;'])}}
            {!! Form::close() !!}
    </div>   
@endsection
