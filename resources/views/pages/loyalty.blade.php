@extends('layout')

@section('content')
<div class="container-fluid">
	<div class="latest-updates">
		<h1 style="text-align:center">Loyalty Points System</h1>
		<span>{{ date('F d, Y', strtotime($update->created_at)) }}</span>
		<p>{!! $update->body !!}</p>
		@if($update->form != '')
			<p style="color:{{ session('suc') == 1 ? 'green' : 'red' }}">{!! session('msg') !!}</p>
			{!! $update->form !!}
		@endif
		<img src="{{$update->img}}" style="width: 100%;">
		<span><a href="{{ url('/') }}">  Go Back </a></span>
	</div>

</div>
@stop