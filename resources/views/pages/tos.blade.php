@extends('layout')

@section('content')
<div id="page-content">
<h1>{{ $content->where('id', 4)->first()->page }}</h1>
<div class="content-wrapper">{!! $content->where('id', 4)->first()->content !!}</div>
</div>
@stop