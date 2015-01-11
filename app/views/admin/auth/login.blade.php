@extends('admin._layouts.admin')

@section('content')

<h1>Login</h1>
	{{ Form::open(array('route' => 'admin.auth.login','method' => 'post'))}}
	<ul>
		<li>
			{{ Form::label('email','Email') }}
			{{ Form::email('email') }}
			{{ $errors->first('email','<p class="error">:message</p>')}}
		</li>
		<li>
			{{ Form::label('password','Password') }}
			{{ Form::password('password') }}
			{{ $errors->first('password','<p class="error">:message</p>')}}
		</li>
		<li>
			{{ Form::label('remember_me','Remember Me') }}
			{{ Form::checkbox('remember_me') }}
		</li>
		<li>
			{{ Form::submit('Log In') }}
		</li>
	</ul>
	{{ Form::close()}}
	
@stop