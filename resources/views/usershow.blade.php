@extends('master')

@section('Random User Results')
	
@stop

@section('head')
	
@stop

@section('content')
	<div class="container">
		
	<h1>ICU Random User Generator</h1>
    
        <p>  
        <?php
        for ($i=0; $i < $HowManyUsers; $i++) {
        	 echo "<p>" . $faker->name . "</p>";
        }?>
        </p>

	</div>
@stop