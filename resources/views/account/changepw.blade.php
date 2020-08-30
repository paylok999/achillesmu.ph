@extends('layout')

@section('content')
<h1>Change Password</h1>
<div id="content-container">
<p>Please fill in the form details below in order to change your password</p>
<p style="color:{{ session('suc') == 1 ? 'green' : 'red' }}">{!! session('msg') !!}</p>
<form action="{{ url('/') }}/account/change-password" method="post">
	<div class="form-group">
		<label for="username">Current Password</label>
		<input type="password" class="form-control" name="oldpassword" placeholder="Type your Current Password">
	</div>

	<div class="form-group">
		<label for="password">New Password</label>
		<input type="password" class="form-control" name="newpassword" placeholder="Type your New Password">
	</div>

	<div class="form-group">
		<label for="password">Repeat New Password</label>
		<input type="password" class="form-control" name="rnewpassword" placeholder="Repeat your New Password">
	</div>
	{{ csrf_field() }}

	<button type="submit" class="btn btn-primary" style="padding: 4px;margin: 4px;margin-left: 0;font-size: 13px;">Submit</button>
</form>
</div>
@stop