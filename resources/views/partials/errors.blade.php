@if(!$errors->isEmpty())
	<div class="alert alert-danger">
		<strong>Ups!</strong> Please fix the following errors:
		<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif