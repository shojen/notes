@extends('layouts.layout')

@section('title')
	Create Note
@endsection

@section('content')
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<h1 class="text-center">Form create a note</h1>
			@include('partials.errors')
			<form action="{!! action('NotesController@store') !!}" method="post">
				{!! csrf_field() !!}
				<div class="form-group">
					<label for="note">Write a note</label>
					<input type="text" name="note" class='form-control'>
					
				</div>
				<input type="submit" value="Create note" class="btn btn-primary center-block">
			</form>
		</div>
	</div>
@endsection
