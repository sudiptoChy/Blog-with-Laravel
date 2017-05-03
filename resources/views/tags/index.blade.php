@extends('main')

@section('title', '| All Tags')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>Tags</h1>

			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>

				<tbody>
					@foreach($tags as $tag)
						<tr>
							<th> {{ $tag->id }}</th>
							<td> <a href="{{ route('tags.show', $tag->id )}}"> {{ $tag->name }} </a></th>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<div class="col-md-3">
			<div class="well">
				<form method="POST" action="{{ route('tags.store') }}">
					<h2> New Tag </h2> <br>
					<input type="text" name="name" class = "form-control" placeholder="tag name" required="true"> <br>
					<input type="submit" value="Create new category" class="btn btn-primary btn-block">
            		<input type="hidden" name="_token" value="{{ Session::token() }}">
				</form>
			</div>
			
		</div>
	</div>

@endsection