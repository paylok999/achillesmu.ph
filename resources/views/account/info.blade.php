@extends('layout')

@section('content')
<style>
#account-info-cont{
	
}
.account{
	color: #ff9393;
    margin-bottom: 0px;
    max-width: 409px;
    margin: 0 auto;
    margin-bottom: 10px;
	    
}
</style>
<h1>Account Information</h1>
<div id="content-container" style="margin:0 auto; text-align:center;">

<p>Below you can see your account information</p>

<p class="account">Username: {{Auth::user()->memb___id}}</p>
<p class="account">Email: {{Auth::user()->mail_addr}}</p>
<h4>Season 2</h4>
<p class="account">WcoinsC: {{$wcoins->WCoinC}}</p>
<p class="account">WcoinsP: {{$wcoins->WCoinP}}</p>
<p class="account">Goblin Points: {{$wcoins->GoblinPoint}}</p>
<h4>Season 15</h4>
<p class="account">Wcoins: {{$wcoins->WCoin}}</p>

<p class="account">Goblin Points: {{$wcoins->GoblinPoint15}}</p>

<h1>Characters</h1>
<p>Below you can see your character details</p>
<p style="color:{{ session('suc') == 1 ? 'green' : 'red' }}">{!! session('msg') !!}</p>
<table  class="table table-dark">
  <thead>
	<tr>
	  <th>#</th>
	  <th>Name</th>
	  <th>Level</th>
	  <th>Unstuck</th>
	  <th>Rename</th>
	  <th>Reset Stats</th>
	</tr>
  </thead>
  <tbody>
	@foreach ($characters as $key => $v)
	<tr>
	  <th scope="row">{{$key}}</th>
	  <td>{{$v->name}}</td>
	  <td>{{$v->total_level}}</td>
	  <td><a href="{{ url('/') }}/account/characters?charname={{$v->name}}">Unstuck</a></td>
	  <td><a href="{{ url('/') }}/account/rename?charname={{$v->name}}">Rename</a></td>
	  <td>
		<a href="javascript:void(0);" class="resetstats" id="{{$v->name}}">Reset Stats</a>
		<span id="resetstats-process-{{$v->name}}" class="resetstats-process" style="display:none;color: green;font-size: 14px;">Processing....</span>
	  </td>
	</tr>
	@endforeach
  </tbody>
</table>
</div>
@stop
