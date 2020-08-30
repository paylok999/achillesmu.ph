@extends('layout')

@section('content')
<div class="container-fluid">
	<h1 style="text-align:center">{{$season}} Rankings</h1>

	 <table  class="table table-dark" style="margin-top:10px;">
	  <thead>
	    <tr>
	      <th>Rank</th>
	      <th>Name</th>
	      <th>Level</th>
	      <th>Win</th>
	      <th>Lose</th>
	    </tr>
	  </thead>
	  <tbody>
        @if($season == 's2')
	  	@foreach ($rankings as $key => $rank)
	    <tr>
	      <th scope="row">{{$key+1}}</th>
	      <td class="server-stat">{{$rank->name}}</td>
	      <td class="server-stat">{{$rank->total_level}}</td>
	      <td class="server-stat">{{$rank->winduels}}</td>
	      <td class="server-stat" >{{$rank->loseduels}}</td>
	    </tr>
	    @endforeach
        @else
        @foreach ($rankingss15 as $key => $rank)
	    <tr>
	      <th scope="row">{{$key+1}}</th>
	      <td>{{$rank->name}}</td>
	      <td>{{$rank->total_level}}</td>
	      <td>{{$rank->winduels}}</td>
	      <td>{{$rank->loseduels}}</td>
	    </tr>
	    @endforeach
        @endif
	  </tbody>
	</table>

</div>
@stop