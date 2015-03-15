@extends('master')

@section('container')
	<form action="#" method="POST" role="form">
		<legend>For add post, please fill all fields!</legend>
	
		<div class="form-group">
			<label for="title">Title</label>
			<input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
		</div>
	
		<div class="form-group">
			<label for="description">Description</label>
			<textarea class="form-control" name="description" id="description" rows="3"></textarea>
		</div>	
	
		<div class="form-group">
			<label for="text">Full Text</label>
			<textarea class="form-control" name="text" id="text" rows="3"></textarea>
		</div>

		<div class="form-group">
			<label for="author">Author</label>
			<input type="text" class="form-control" id="author" name="author" placeholder="Enter author">
		</div>

		<button type="submit" name="save" id="save" class="btn btn-primary">Save Post</button>
	</form>
@stop