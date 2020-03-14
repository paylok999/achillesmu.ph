@extends('layout')

@section('content')

<div>
<h1>Rename Characters </h1>

<p>Want  rename your characters? Add special symbol? This is the feature you've been waiting for.</p>
<p>WARNING: Please remove your pentagrams when rename. All other equipments are safe</p>
<p>You currently have {{ $wcoins->WCoin }} Wcoins. You need to have 2500 in order to proceed with this feature</p>

</div>
<script>
$(function(){
	$('#renameForm').submit(function() {
		return confirm('Confirm Rename? Once click ok, your request will be process and you will be charge 2500 wcoins');
		return false;
	});
});
</script>
<div style="margin-top: 10px;padding-top: 10px; border-top: solid 1px #ccc;">
	<form method="post" id="renameForm" target="">
		  <div class="form-group">
		  <p>Your current name is <span>{{ $current_name }}</span></p>
			<input type="text" class="form-control"  name="new_name" placeholder="Enter New Name" maxlength="10">
			<input type="hidden" class="form-control"  name="current_name" value="{{ $current_name }}" maxlength="10">
		  </div>
		  {{ csrf_field() }}
		  <button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>

@stop