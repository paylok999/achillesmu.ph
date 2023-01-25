@extends('layout')

@section('content')
<div class="container-fluid">
	<h1 style="text-align:center">Chaos Castle Rankings</h1>

	<table  class="table table-dark">
	  <thead>
	    <tr>
	      <th>#</th>
	      <th>Name</th>
	      <th>Wins</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach ($ccrankings as $key => $rank)
	    <tr>
	      <th scope="row">{{$key + 1}}</th>
	      <td>{{$rank->Name}}</td>
	      <td>{{$rank->Wins}}</td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>

</div>
@stop