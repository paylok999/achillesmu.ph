@extends('layout')

@section('content')
<h1>{{$update->subject}}</h1>

<div class="updates">
    <span style="color:#b7ac90; margin: 10px 0;display: block;font-size: 15px;">{{ date('F d, Y', strtotime($update->created_at)) }}</span>
	{!! $update->body !!}
	{!! $update->form !!}
    
	
	
</div>
<br>
    <img src="{!! $update->img !!}" style="width: 100%; padding: 10px;">
					
@stop