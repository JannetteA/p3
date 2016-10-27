@extends('master')

@section('Random User Results')
	
@stop

@section('head')
	
@stop

@section('content')

	<div class="container">
		
		<h1>ICU Random User Generator</h1>
    
	        <!-- This simple sectin displays the random user names in proper format -->
	        <div>  
	        <?php
	        for ($i=0; $i < $HowManyUsers; $i++) {
	        	 echo "<p>" . $faker->name . "</p>";
	        }?>
	        </div>

	</div>
@stop