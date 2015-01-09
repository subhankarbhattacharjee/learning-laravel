@extends('admin._layouts.admin')

@section('content')

<h1>Posts</h1>

{{ link_to_route('admin.posts.create','New Post') }}

@if(count($posts))
	<ul>
		@foreach($posts as $post)
			<li> {{ link_to_route('admin.posts.edit',$post->title, array($post->id))}} </li>
			
			{{ Form::open(array('route' => array('admin.posts.destroy',$post->id),'method' => 'delete','class' => 'destroy'))}}
				{{ Form::submit('Delete') }}
			{{ Form::close()}}

		@endforeach
	</ul>
@endif
@stop