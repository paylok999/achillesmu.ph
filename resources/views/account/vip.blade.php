@extends('layout')

@section('content')
<script>


$(function(){
	$('#vipForm').submit(function() {
		// get all the inputs into an array.
		var inputs = $('#vipForm :input');
		
		
		var values = {};
		inputs.each(function() {
			values[this.name] = $(this).val();
		});
		console.log(values.days);
		
		if(values.days == 0) {
			alert('Choose Your VIP Subscription');
			return false;
		}
		else {
			return confirm('Go VIP for '+ values.days +' Day(s)?');
		}
		
		return false;
	});

});

</script>
<div>
<h1>VIP System</h1>

<p>Enrolling on our VIP System gives you the access that normal player doesn't have. You will have access to:</p>
<ul>
	<li>Exp Bonus</li>
	<li>Drop Bonus</li>
	<li>Exc Drop Bonus</li>
	<li>Master Exp Bonus</li>
	<li>Master Drop Bonus</li>
	<li>Master Exc Drop Bonus</li>
</ul>

<div style="text-align: center;margin-top: 10px;border-top: solid 1px #ccc;padding-top: 10px;">
	<p>You can Enroll on our VIP System using the form below. Please choose the number of days you want to enroll.</p>
	<p>You currently have {{ $wcoins->WCoin }} Wcoins. You need atleast 100wcoins to be VIP. <a href="{{ url('/') }}/account/donate">Load Up</a></p>
	
	<p style="color:{{ session('vip_suc') == 1 ? 'green' : 'red' }}">{!! session('vip_msg') !!}</p>
</div>
	<div style="max-width:400px; margin: 0 auto;">
	<form class="form-inline" id="vipForm" method="post" target="">
	  <label class="mr-sm-2" for="inlineFormCustomSelect">Preference</label>
	  <select class="custom-select mb-2 mr-sm-2 mb-sm-0" id="inlineFormCustomSelect" name="days">
		<option value="0" selected>Choose Your VIP Subscription</option>
		<option value="1">1 Day - 100Wcoins</option>
		<option value="3">3 Days - 300Wcoins</option>
		<option value="7">7 Days - 600Wcoins</option>
		<option value="30">30 Days - 2500Wcoins</option>
	  </select>
		{{ csrf_field() }}
	  <button type="submit" class="btn btn-primary" style="margin-top:15px;">Submit</button>
	</form>
</div>

</div>


@stop