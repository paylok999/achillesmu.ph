@extends('layout')

@section('content')
<div class="container-fluid">
	<h1 style="text-align:center">Rankings</h1>

	<table  class="table table-dark">
	  <thead>
	    <tr>
	      <th>#</th>
	      <th>Name</th>
	      <th>Level</th>
	      <th>Win</th>
	      <th>Lose</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach ($rankings as $key => $rank)
	    <tr>
	      <th scope="row">{{$key}}</th>
	      <td>{{$rank->name}}</td>
	      <td>{{$rank->total_level}}</td>
	      <td>{{$rank->winduels}}</td>
	      <td>{{$rank->loseduels}}</td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>

</div>
@stop