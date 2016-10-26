@extends('master')

@section('Random User Generator Form')
    
@stop

@section('head')
    
@stop

@section('content')
    
    <div class="container">
        
        <h1>ICU Random User Generator</h1>
            
            <p>How many users do you need? (Max 20)</p>

            <!-- The form and error handling starts here -->
            <form method='POST' action='/user'>
            {{ csrf_field() }}
            <input type="text" maxlengh="2" name='HowManyUsers' value="1">
            <input type='submit' value='Submit'>
               
            @if(count($errors) > 0)
                <ul>
                    @foreach($errors->all() as $error)
                        <ul>{{ $error }}</ul>
                    @endforeach
                </ul>
            @endif
            </form>
        
    </div>
@stop