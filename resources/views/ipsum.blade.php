@extends('master')

@section('Ipsum Lorem Generator Form')
	
@stop

@section('head')
	
@stop

@section('content')
	<div class="container">

		
		
	<h1>ICU Lorem Ipsum Generator</h1>
	

    <p>How many paragraphs do you need?</p>
	<form method='POST' action='/ipsum'>
    {{ csrf_field() }}
    <input type='text' name='HowManyParagraphs'>
    <input type='submit' value='Submit'>
   
           @if(count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

    </form>
    <p>This form does not have validation yet, it will be added soon!</p>
    

    </div>
@stop