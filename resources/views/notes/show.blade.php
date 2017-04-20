@extends('layouts.layout')

@section('title','nota ampliada')

@section('content')                

    <div class="container">
        
        <a href="{!! action('NotesController@index') !!}" class="btn btn-primary">back</a>
        <h1>A NOTE</h1>
        <p>
            {{ $note->note }}
        </p>
        
        
    </div>
    
@endsection