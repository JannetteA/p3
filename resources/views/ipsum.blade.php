@extends('master')

@section('Ipsum Lorem Generator Form')
	
@stop

@section('head')
	
@stop

@section('content')
	<div class="container">
			
	<h1>ICU Lorem Ipsum Generator</h1>

    <p>How many paragraphs do you need? (Max 10)</p>

       
        <form method='POST' action='/ipsum'>
        {{ csrf_field() }}
        <input type="text" maxlengh="2" name='HowManyParagraphs' value="1">
        <input type='submit' value='Submit'>
        </form>

        @if(count($errors) > 0)
            <ul>
                @foreach($errors->all() as $error)
                    <ul>{{ $error }}</ul>
                @endforeach
            </ul>
        @endif
        
            
    </div>
@stop