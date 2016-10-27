@extends('master')

@section('Ipsum Lorem Generator Form')
	
@stop

@section('head')
	
@stop

@section('content')
	
	<div class="container">
		
		<!-- This simple sectin displays the paragraphs in proper format -->
		<h1>ICU Lorem Ipsum Generator</h1>
	
	    <p>
	        <?php echo implode('<p>', $paragraphs) ?>
	    </p>
	
    </div>

@stop