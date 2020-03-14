<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<style>
body{
	margin:0;
	width:240px;
	height:100px;
	overflow-y: scroll;
	background-color: black;
    color: white;
}
h3{
	 font-size:14px;
	 padding: 0;
	 margin: 0;
	 padding-bottom: 7px;
	 font-weight:bold;
	 color:#cfb265;
 }
h4{
	font-size:12px;
	padding: 0 !important;
    margin: 0 !important;
 }
 
 a{
	font-size:11px;
	padding: 0 !important;
    margin: 0 !important;
 }
</style>
<div style=" width:250px; height:100px; overflow-y:scroll">
@foreach($updates as $key => $v)
<div style="border-bottom:dotted 1px #ccc;padding-bottom: 5px; padding-top: 5px;"> 
<h3>{{$v->subject}}</h3>
<h4>{{ date('F d, Y', strtotime($v->created_at)) }}</h4>
<a href="/updates/{{ $v->id }}/{{ strtolower(str_replace(' ', '-',$v->subject)) }}" target="_blank">Read</a>
</div>
@endforeach
</div>