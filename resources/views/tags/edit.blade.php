@extends('main')

@section('title', "| $tag->name Tag")

@section('content')

	<div class="row">
		<div class="col-md-12">
			<form method="POST" action="{{ route('tags.update', $tag->id)}}">
				<label name="title">Tag name:</label>
				<input id="name" name="name" class="form-control" value="{{ $tag->name }}">
				<br>
				<input type="submit" value="Save Changes" class="btn btn-success btn-sm">
	            <input type="hidden" name="_token" value="{{ Session::token() }}">
	              {{ method_field('PUT') }}
			</form>
		</div>
	</div>

@endsection