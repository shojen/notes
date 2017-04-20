@extends('layouts.layout')

@section('title','Listado de notas')

@section('content')                

    <div class="container">
        <a class="btn btn-primary" href="{!! action('NotesController@create') !!}">add a note</a>
        <h1>NOTES</h1>
        
        <ul class="list-group">
            @foreach($notes as $note)
                <li class="list-group-item">
                <label class="label label-info">{{ $note->category->name }}</label>
                {{ str_limit($note->note,150,'...') }} <a href="{!! action('NotesController@show',$note->id) !!}">View note</a>
                </li>
            @endforeach
        </ul>
        {!! $notes->render() !!}
    </div>
    
@endsection
