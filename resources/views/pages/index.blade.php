@extends('layout')

@section('content')
<h1>News and Updates</h1>
@foreach($updates as $key => $v)
<div class="updates">
	<h3>{{$v->subject}}</h3>
	<h4>{{ date('F d, Y', strtotime($v->created_at)) }}</h4>
	<p>{!! $v->header !!}<p>
	<a href="/updates/{{ $v->id }}/{{ strtolower(str_replace(' ', '-',$v->subject)) }}">More Details >>></a>
</div>
@endforeach
@stop