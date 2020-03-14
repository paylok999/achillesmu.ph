@extends('layout')

@section('content')
<div id="page-content">
<h1>{{ $content->where('id', 3)->first()->page }}</h1>
<p>{{ $content->where('id', 3)->first()->content }}</p>
</div>
@stop