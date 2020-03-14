@extends('layout')

@section('content')
<style>

li{color:white};
.lottery-sub{ color:#fbffcc !important};
</style>
<div class="container-fluid">
	<div class="latest-updates">
		<h1 style="text-align:center">Weekly Lottery</h1>
		<div style="text-align: center; border-bottom: solid 1px #ccc;margin: 18px;">
			<h3 style="color:#fbffcc">Current Grand Prize</h3>
			<img src="{{$lottery->image}}" style="width:100%;max-width:300px;">
		</div>
		<p>Our weekly lottery is a new feature in which, player will join with their jewels or wcoins.</p>
		<p>Mechanics:</p>
		</ul>
			<li>You either need Jewels or Wcoins. Please refer below in order to qualified for 1 raffle ticket
				<ul class="lottery-sub">
					<li>30 Jewel of Bless + 30 Jewel of Soul - (1 Raffle Ticket)</li>
					<li>30 Jewel of Creation + 30Jewels of life + 30 Jewel of Chaos - (1 Raffle Ticket)</li>
					<li>500Wcoins - (1 Raffle Ticket)</li>
				</ul>
			</li>
			<li>Participants who use wcoins will be automatically approve and 500wc will be deducted on their account. No Refund</li>
			<li>Participants who use Jewels (approval pending until we get jewels)need to have their jewels on the lower left of their vault. Please refer to screenshot below<br><img src="http://playmu.ph/img/raffle/raffle_ticket.jpg" style="max-width: 400px;margin-left: 125px;margin-top: 10px;"></li>
			<li>You can enter as many account as you want as long as you have Jewels or wcoins</li>
			<li>By joining, you automatically allowed the Admin to remove the Jewels from your vault and deduct 500wc from your account</li>
			<li>Minimum of 50participants before we can start the raffle. It will be carryover next week just in case we do not meet the 50 participants</li>
			<li>Lottery will be broadcast via facebook live</li>
		</ul>
		<p>&nbsp;</p>
		<p>Please use the form below in order to join. You must login first to see the form below</p>
		<p style="color:{{ session('suc') == 1 ? 'green' : 'red' }}">{!! session('msg') !!}</p>
		@if (Auth::check())
			@if($is_lottery_join == null)
		<form action="/lottery" method="post">
		<div class="form-check">
		  <input class="form-check-input" type="radio" name="type" id="exampleRadios1" value="1" checked>
		  <label class="form-check-label" for="exampleRadios1">
			30 Jewel of Bless + 30 Jewel of Soul
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input" type="radio" name="type" id="exampleRadios2" value="2">
		  <label class="form-check-label" for="exampleRadios2">
			30 Jewel of Creation + 30Jewels of life + 30 Jewel of Chaos
		  </label>
		</div>
		<div class="form-check">
		  <input class="form-check-input" type="radio" name="type" id="exampleRadios3" value="3">
		  <label class="form-check-label" for="exampleRadios3">
			500Wcoins (Auto Join/Deduct)
		  </label>
		</div>
		<div class="form-check">
		  <button type="submit" class="btn btn-primary" style="padding: 6px;margin: 10px;margin-left: 0px;">Join Lottery</button>
		</div>
		{{ csrf_field() }}
		</form>
			@endif
		<p>Check the table below for the list of users registered. </p>
		<p>You can only see your username (Refreshes every 10minutes. Come back again after 10min. if you did not see your username)</p>
		<table  class="table table-dark">
		  <thead>
			<tr>
			  <th>#</th>
			  <th>username</th>
			  <th>Join Type</th>
			  <th>Approve</th>
			</tr>
		  </thead>
		  <tbody>
			@foreach ($lottery_users as $key => $lottery_user)
			<tr>
			  <th scope="row">{{$key + 1}}</th>
			  <td>@if($lottery_user->name == Auth::user()->memb___id) {{$lottery_user->name}} @else xxxxxxxxxx @endif </td>
			  <td>@if ($lottery_user->type == 1) Bundle of Jewel of Bless/Souls @elseif ($lottery_user->type == 2) Bundle of Jewel of Chaos/Creation/Life @else WCoins @endif</td>
			  <td>@if ($lottery_user->approve == 1) Yes @else Pending @endif</td>
			</tr>
			@endforeach
		  </tbody>
		</table>
		
		@endif
	</div>

</div>
@stop