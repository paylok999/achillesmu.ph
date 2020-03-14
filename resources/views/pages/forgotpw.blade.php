@extends('layout')

@section('content')
<div class="clearfix">
	<div class="container-fluid float-left" style="width:60%;border-right: solid 1px #585858;">
		<h1>Forgot Password</h1>
		<p>If you forgot your password, please enter your email below, if the email you enter match our database, we will email your new password</p>

		<p style="color:{{ session('suc') == 1 ? 'green' : 'red' }}">{!! session('msg') !!}</p>
		<form action="{{ url('/') }}/forgot-password" method="post">

			<div class="form-group">
				<label for="password">Email</label>
				<input type="text" class="form-control" name="email" placeholder="Type your email">
			</div>
			{{ csrf_field() }}

			<button type="submit" class="btn btn-primary" style="padding: 4px;margin: 4px;margin-left: 0;font-size: 13px;">Submit</button>
		</form>
		<p>Forgot Password? <a href="{{ url('/') }}/forgot-password" target="_blank">Click here</a> </p>
		<p>Download our client. <a href="http://www.mediafire.com/file/8s96ezipfj6icya/PlayMU.PH+SeasonXIII.rar" target="_blank">Click here</a> </p>
	</div>
	@include('right-side')
</div>


@stop