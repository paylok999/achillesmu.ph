@extends('layout')

@section('content')
<div class="container-fluid" id="serverinfo">
	<h1 style="text-align:center">Coupon Winners for EventID: {{$event}}</h1>

	 <table  class="table table-dark" style="margin-top:10px;">
	  <thead>
	    <tr>
	      <th>Count</th>
	      <th>Name</th>
	      <th>Coupon</th>
	      <th>Prize</th>
	    </tr>
	  </thead>
	  <tbody>
        @if(count($coupon) >= 1)
        @foreach ($coupon as $key => $rank)
	    <tr>
	      <th scope="row">{{$key+1}}</th>
	      <td>{{$rank['name']}}</td>
	      <td>{{$rank['coupon']}}</td>
	      <td>{{$rank['prize']}}</td>
	    </tr>
	    @endforeach
        @endif
	  </tbody>
	</table>

</div>
@stop