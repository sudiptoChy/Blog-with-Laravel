@extends('main')

@section('title', "| $tag->name Tag")

@section('content')
	
	<div class="row">
		<div class="col-md-8">
			<h1>{{ $tag->name }} Tag <small>{{ $tag->posts->count() }} posts </small></h1>
		</div>
		<div class="col-md-2">
			<a href="{{ route('tags.edit', $tag->id )}}" class="btn btn-primary pull-right" style="margin-top: 20px;"> Edit </a>
		</div>
		<div class="col-md-2">
			<form action="{{ route('tags.destroy', $tag->id) }}" method="POST">
				<input type="hidden" name="_token" value="{{ Session::token() }}">
				<button class="btn btn-danger" style="margin-top: 20px;"> Delete </button>
				{{ method_field('DELETE') }}
			</form>
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<tr>
						<th>#</th>
						<th>Title</th>
						<th>Tags</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					@foreach($tag->posts as $post)
						<tr>
							<th> {{ $post->id }} </th>
							<td> {{ $post->title }} </td>
							<td> 
								@foreach($post->tags as $tag)
									<span class="label label-default"> {{ $tag->name }}</span>
								@endforeach
							</td>
							<td>
								<a href="{{ route('posts.show', $post->id )}}" class="btn btn-default btn-xs"> View </a>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	

@endsection