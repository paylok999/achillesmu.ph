@extends('layout')

@section('content')
<style>
th{
    width:33%;
}
</style>
<div class="container-fluid" id="serverinfo">
	<h1 style="text-align:center">Class Rankings</h1>

	 <table  class="table table-dark" style="margin-top:10px;">
	  <thead>
	    <tr>
	      <th>Rank</th>
	      <th>Name</th>
	      <th>Level</th>

	    </tr>
	  </thead>
	  <tbody>
        @foreach ($classrankings as $key => $rank)
	    <tr>
	      <th scope="row">{{$key+1}}</th>
	      <td class="server-stat">{{$rank->name}}</td>
	      <td class="server-stat">{{$rank->total_level}}</td>
	    </tr>
	    @endforeach
	  </tbody>
	</table>

</div>
@stop