<!DOCTYPE html>

<html lang="en">
<title>Play MU - MU Online Philippines Server</title>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<style>
body{
	background-color:black;
	font-size:14px;
}
a {
	color:red;
}
a:hover {
	color:#ffbebe;
	text-decoration:none;
}
p{
	color:#fff;
}
h1{
	color:#fff;
}
label{
	color:#fff;
}
ul{color:#fff;}

#body-container{
	background: url('/img/play_mu_bg2.png') no-repeat center top;
	width: 100%;
}

#header{
	height: 40px;
    width: 100%;
    background-color: black;
    border-bottom: solid 1px #545454;
    position:fixed;
    padding: 0 50px;
}

#header ul{
	padding:10px;
	font-size:13px;
}
#header li{
	display:inline-block;
	padding-right: 13px;
}

#header .form-group{
	padding-right:10px;
}

#main-content{
	width: 988px;
    margin: 0 auto;
}
input{
	max-width:500px;
}

#top-content{
	height:227px;
	padding-top:50px;
}

#top-content .srvrinfo{
	width: 300px;
    border: solid 1px #000;
    height: 68px;
    padding: 7px;
    background-color: rgba(0, 0, 0, 0.5);
    border-radius:5px;
}

#top-content .srvrinfo p{
	font-size:12px;
	margin-bottom:0;
}

#mid-content{
	height:550px;
	margin:20px;
}

#mid-content .right-side{
	border-bottom: solid 1px #ccc;
	padding-bottom: 20px;
}
#footer{
    text-align: center;
    border-top: solid 1px #ccc;
    padding: 20px;
}
</style>
<script>
$(function(){

	// this is the id of the form
	$("#loginForm").submit(function(e) {
		$('#logme').hide();
		$('#img-spinner').show();

	    var url = "{{ url('/') }}/login"; // the script where you handle the form input.

	    $.ajax({
	           type: "POST",
	           url: url,
	           data: $("#loginForm").serialize(), // serializes the form's elements.
	           success: function(data)
	           {
	           	console.log(data.success);
	           	
	           	if(data.success == 0)
	           	{
	           		$('#logme').show();
	           		$('#img-spinner').hide();
	           		$('#err_login').show(500);
	           		$("#err_login").delay(3500).fadeOut();
	           		$('#err_login').html(data.err);
	           	}else{
	           		location.reload();
	           	}

	           }
	         });

	    e.preventDefault(); // avoid to execute the actual submit of the form.
	});

});

</script>
<body>
	<div id="header" class="clearfix">
		<div id="nav" class="float-left">
			<ul>
				<li><a href="/">REGISTER</a></li>
				<li><a href="http://www.mediafire.com/file/4simvl6khauequz/betatest.rar" target="_blank">DOWNLOAD</a></li>
				<li><a href="http://www.mediafire.com/file/4simvl6khauequz/betatest.rar" target="_blank">RANKINGS</a></li>
				<li><a href="http://www.mediafire.com/file/4simvl6khauequz/betatest.rar" target="_blank">DONATIONS</a></li>
			</ul>
		</div>
		<div id="right-nav" class="float-right"  style="position:relative">
			@if (Auth::check())
			<ul>
				<li>Welcome {{Auth::user()->memb___id}}</li>
				<li><a href="{{ url('/') }}/logout"><span class="glyphicon glyphicon-asterisk"></span></a></li>
			</ul>
			@else
			<form class="form-inline " id="loginForm">
				<div class="form-group">
					<label class="sr-only" for="exampleInputEmail3">Username</label>
					<input type="username" class="form-control form-control-sm" placeholder="Username" name="username">
				</div>
				<div class="form-group">
					<label class="sr-only" for="exampleInputPassword3">Password</label>
					<input type="password" class="form-control form-control-sm" placeholder="Password" name="password">
				</div>
				{{ csrf_field() }}
				<button type="submit" class="btn btn-default form-control-sm" id="logme" style="padding: 4px;font-size: 14px;margin: 4px;margin-left:0">Sign in</button>
				<a href="#" style="font-size: 11px;line-height:15px;padding-left: 3px;">Forgot<br>Pass?</a>
				<img id="img-spinner" src="/img/ajax-loader.gif" style="padding: 4px;font-size: 14px;margin: -1px; margin-left: 0; display:none">
				<div id="err_login" style="width:100px;    width: 100%; position: absolute;top: 36px;background-color: rgba(255, 255, 255, 0.7);margin-top: 8px;padding: 5px;border: solid 1px #000;border-radius: 5px;color: red;display:none">Message</div>
			</form>
			@endif
		</div>
	</div>

	<div id="body-container">
		<div id="main-content">
			<div id="top-content" class="clearfix">
				<div class="float-left srvrinfo">
					<p>SERVER STATUS: <span style="color:green">ONLINE</span></p>
					<p>Active Players in last 24hrs: 100</p>
					<p>Server Time 12:40:14</p>
				</div>
				<!--<div class="float-right srvrinfo">

				</div> -->
			</div>
			<div id="mid-content">
				<div class="container-fluid float-left" style="width:60%;border-right: solid 1px #585858;">
					<h1>Registration</h1>
					<p>Please fill out the registration form below in order to start playing with us.</p>

					<p style="color:{{ session('suc') == 1 ? 'green' : 'red' }}">{!! session('msg') !!}</p>
					<form action="{{ url('/') }}/save" method="post">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" class="form-control" name="username" placeholder="Type your username">
						</div>

						<div class="form-group">
							<label for="password">Email</label>
							<input type="text" class="form-control" name="email" placeholder="Type your email">
						</div>

						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" class="form-control" name="password" placeholder="Type your password">
						</div>
						{{ csrf_field() }}

						<button type="submit" class="btn btn-primary" style="padding: 4px;margin: 4px;margin-left: 0;font-size: 13px;">Submit</button>
					</form>
					<p>Forgot Password? <a href="#" target="_blank">Click here</a> </p>
					<p>Download our client. <a href="http://www.mediafire.com/file/4simvl6khauequz/betatest.rar" target="_blank">Click here</a> </p>
				</div>
				<div class="container-fluid float-right" style="width:39%">

					<div class="right-side">
						<p>Like and Join us on Facebook</p>
						<div>
							<a href="https://web.facebook.com/playmu.ph/" target="_blank"><img src="http://aristotlebuzz.com/wp-content/uploads/2017/01/Facebook.png" style="max-width:170px;"></a>
						</div>
						<div>
							<a href="https://web.facebook.com/playmu.ph/" target="_blank">Click here for Facebook Group</a>
						</div>
					</div>
					<div class="right-side" style="border:none">
						<p style="padding-top:10px;">SERVER INFO</p>
						<ul>
							<li>x200 Normal Exp</li>
							<li>x250 Master Level Exp</li>
							<li>400 Max Normal Level</li>
							<li>520 Max Master Level</li>
							<li>Max 3 Excellent Options</li>
							<li>no Excellent Ancient</li>
							<li>no Excellent Socketed</li>
							<li>Max 3socket for Sets and 1Handed Weapon</li>
							<li>5 Max Sockets on 2Handed Weapons/Bow</li>
							<li>No Excellent 380 items</li>
						</ul>
					</div>

				</div>
			</div>
		</div>
	</div>

	<div id="footer">
		<p>Play MU Phillippines 2018.</p>
	</div>

	

</body>

</html>