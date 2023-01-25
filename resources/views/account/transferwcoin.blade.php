@extends('layout')

@section('content')
<h1>Transfer Wcoins</h1>
<div id="content-container" style="margin:0 auto; text-align:center;">
<p>You can use the feature below to transfer your wcoins to another account. Make sure all account is log off.</p>
<p>NOTE: THIS IS A MERCHANT ONLY FEATURE. CONTACT US IF YOU WANT TO BE A MERCHANT</p>
<p style="color:#ff7878">Your current wcoins: {{$wcoins->WCoin}}</p>
<p style="color:{{ session('suc') == 1 ? 'green' : 'red' }}">{!! session('msg') !!}</p>
<form action="{{ url('/') }}/account/wcoins" method="post">
	<div class="form-group">
		<label for="username">Receiver Username</label>
		<input type="text" class="form-control" name="receiverusername" placeholder="Type the receiver username">
	</div>

	<div class="form-group">
		<label for="password">Amount</label>
		<input type="text" class="form-control" name="amount" placeholder="amount to send">
	</div>

	{{ csrf_field() }}

	<button type="submit" class="btn btn-primary" style="padding: 4px;margin: 4px;margin-left: 0;font-size: 13px;">Submit</button>
</form>
</div>
@stop