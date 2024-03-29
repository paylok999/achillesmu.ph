@extends('layout')

@section('content')
<div class="container-fluid" id="serverinfo">
	<h1 style="text-align:center">Level Rankings</h1>

	 <table  class="table table-dark" style="margin-top:10px;">
	  <thead>
	    <tr>
	      <th>Rank</th>
	      <th>Name</th>
	      <th>Level</th>

	    </tr>
	  </thead>
	  <tbody>
        @if($season == 'gp')
	  	@foreach ($rankings as $key => $rank)
	    <tr>
	      <td class="server-stat">{{$key+1}}</th>
	      <td class="server-stat">{{$rank->name}}</td>
	      <td class="server-stat">{{$rank->total_level}}</td>

	    </tr>
	    @endforeach
        @else
        @foreach ($rankingss15 as $key => $rank)
	    <tr>
	      <td class="server-stat">{{$key+1}}</th>
	      <td class="server-stat">{{$rank->name}}</td>
	      <td class="server-stat">{{$rank->total_level}}</td>
	    </tr>
	    @endforeach
        @endif
	  </tbody>
	</table>

</div>
@stop