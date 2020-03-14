@extends('layout')

@section('content')
<div class="container-fluid">
	<h1 style="text-align:center">Blood Castle Rankings</h1>

	<table  class="table table-dark">
	  <thead>
	    <tr>
	      <th>#</th>
	      <th>Name</th>
	      <th>Points</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach ($bcrankings as $key => $rank)
	    <tr>
	      <th scope="row">{{$key + 1}}</th>
	      <td>{{$rank->CharacterName}}</td>
	      <td>{{$rank->totalpoints}}</td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>

</div>
@stop