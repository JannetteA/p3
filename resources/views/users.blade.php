@extends('_master')

@section('Random Users Generator Form')
	Welcome to Users Generator
@stop

@section('head')
	
@stop

@section('content')
	<div class='container'>

	
	<a href='/'>← Home</a>

	<h1>User Generator</h1>
		

    {{Form::open(array('url' => '/user-generator', 'method' => 'POST'))}}
    	{{Form::label('users', 'How many users')}}
    	{{Form::text('users')}}
    	<br/>
    	{{Form::checkbox('birthdate','1', false, array('id' =>'birthdate'))}}
    	{{Form::label('birthdate', 'Birthdate')}}
    	<br/>
    	{{Form::checkbox('profile','1', false, array('id' =>'profile'))}}
    	{{Form::label('profile', 'Profile')}}
    	<br/>

    {{Form::submit('Generate!')}}
    {{Form::close()}}
    <p>
    	{{$viewOutput}}
    </p>
	
</div>

@stop