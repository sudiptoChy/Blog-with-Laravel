@extends('main')

@section('title', '| All Categories')

@section('content')

	<div class="row">
		<div class="col-md-8">
			<h1>Categories</h1>

			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Name</th>
					</tr>
				</thead>

				<tbody>
					@foreach($categories as $category)
						<tr>
							<th> {{ $category->id }}</th>
							<td> {{ $category->name }}</th>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>

		<div class="col-md-3">
			<div class="well">
				<form method="POST" action="{{ route('categories.store') }}">
					<h2> New Category </h2> <br>
					<input type="text" name="name" class = "form-control" placeholder="category name" required="true"> <br>
					<input type="submit" value="Create new category" class="btn btn-primary btn-block">
            		<input type="hidden" name="_token" value="{{ Session::token() }}">
				</form>
			</div>
			
		</div>
	</div>

@endsection