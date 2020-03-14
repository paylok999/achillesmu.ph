@extends('layout')

@section('content')
<div id="register">
<h1>Registration</h1>
<p>Please fill out the registration form below in order to start playing with us.</p>

<p style="color:{{ session('suc') == 1 ? 'green' : 'red' }}">{!! session('msg') !!}</p>
<form action="{{ url('/') }}/save" method="post">
	<div class="form-group">
		<label for="username">Username</label>
		<input type="text" class="form-control" name="username" placeholder="Type your username">
	</div>

	<div class="form-group">
		<label for="password">Email</label>
		<input type="text" class="form-control" name="email" placeholder="Type your email">
	</div>

	<div class="form-group">
		<label for="password">Password</label>
		<input type="password" class="form-control" name="password" placeholder="Type your password">
	</div>
	{{ csrf_field() }}

	<button type="submit" class="btn btn-primary btn-login" style="padding: 4px;margin: 4px;margin-left: 0;font-size: 13px;">Register</button>
</form>
</div>
@stop