@extends('layout')

@section('content')
<div class="container-fluid">
	<h1 style="text-align:center">Devil Square Rankings</h1>

	<table  class="table table-dark">
	  <thead>
	    <tr>
	      <th>#</th>
	      <th>Name</th>
	      <th>Points</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach ($dsrankings as $key => $rank)
	    <tr>
	      <th scope="row">{{$key + 1}}</th>
	      <td>{{$rank->CharacterName}}</td>
	      <td>{{$rank->Point}}</td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>

</div>
@stop