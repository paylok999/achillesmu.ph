@extends('layout')

@section('content')
<div class="container-fluid">
	<h1 style="text-align:center">GENS Rankings</h1>

	<table  class="table table-dark">
	  <thead>
	    <tr>
	      <th>#</th>
	      <th>Name</th>
	      <th>Points</th>
	      <th>Gens</th>
	    </tr>
	  </thead>
	  <tbody>
	  	@foreach ($gensrankings as $key => $rank)
	    <tr>
	      <th scope="row">{{$key + 1}}</th>
	      <td>{{$rank->Name}}</td>
	      <td>{{$rank->Points}}</td>
	      <td>@if ($rank->Influence == 1) D @elseif ($rank->Influence == 2) V @else No @endif Gens</td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>

</div>
@stop