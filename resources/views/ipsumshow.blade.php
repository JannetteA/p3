@extends('master')

@section('Ipsum Lorem Generator Form')
	
@stop

@section('head')
	
@stop

@section('content')
	<div class="container">

		
		
	<h1>ICU Lorem Ipsum Generator</h1>
	
    <p> 
      
        <span><?php echo implode('<p>', $paragraphs) ?></span>
  

    </p>
	

    </div>
@stop