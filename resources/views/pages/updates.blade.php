@extends('layout')

@section('content')
<h1>{{$update->subject}}</h1>
<span style="color:#b7ac90; margin-left: 25px;">{{ date('F d, Y', strtotime($update->created_at)) }}</span>
<div class="updates">
	{!! $update->body !!}
	{!! $update->form !!}
	
	
</div>

					
@stop