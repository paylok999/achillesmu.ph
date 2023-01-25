
@extends('layout')

@section('content')
<script>
	grecaptcha.ready(function() {
	  grecaptcha.execute('6LfbsO0iAAAAAH4J9WANGiX-G3BEzgBBcdnd-IBZ', {action: 'submit'}).then(function(token) {
			var recaptchaResponse = document.getElementById('token');
			recaptchaResponse.value = token;
	  });
	});
	
	function claimCoupon(id) {
		var token = $('#token').val();
		window.location.href = ('{{ url('/') }}/account/coupon-claim?id=' + id + '&token=' + token);
	}

  </script>
 

<h1>Claim Coupon Code</h1>
<div id="content-container">
<p>Enter Coupon Code. If your coupon comes from event, you can only claim once.</p>
<p style="color:{{ session('suc') == 1 ? 'green' : 'red' }}">{!! session('msg') !!}</p>
<form action="{{ url('/') }}/account/coupon-code" method="post">
	<div class="form-group">
		<label for="username">Claim Code</label>
		<input type="text" class="form-control" name="couponcode" id="couponcode" placeholder="Type your Coupon Code">
		<input type="hidden" class="form-control" name="token" id="token" >
	</div>
	{{ csrf_field() }}

	<button type="submit">Submit</button>
</form>

@if(!empty($userCoupon)) 
<p style="margin-top: 20px;">Below is the list of your claimed coupon. You can claim it anytime. Log out first before claiming. Once claimed, It will be inserted to your gremory case and you got 1 day to use it. </p>
<p style="color:{{ session('suc2') == 1 ? 'green' : 'red' }}">{!! session('msg2') !!}</p>
<table  class="table table-dark">
  <thead>
	<tr>
	  <th>#</th>
	  <th>Coupon</th>
	  <th>Prize</th>
	  <th>Claimed</th>
	</tr>
  </thead>
  <tbody>
	@foreach ($userCoupon as $key => $v)
	<tr>
		<th scope="row">{{$v->id}}</th>
		<td>{{$v->coupon}}</td>
		<td>{{ isset($prizes[$v->prize]) ? $prizes[$v->prize] : 'Unknown' }}</td>
		@if($v->claimed == 0)
		<td><a href="javascript:void(0)" class="claim-btn" onclick="claimCoupon({{$v->id}})">Claim</a></td>
		@else
		<td>Claimed</td>
		@endif
		</tr>
	@endforeach
  </tbody>
</table>
@endif

</div>
@stop