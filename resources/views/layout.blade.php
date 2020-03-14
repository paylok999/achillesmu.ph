<!DOCTYPE html>

<html lang="en">
<title>Achilles Mu - MU Online Season 2</title>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<style>

@font-face {
font-family: "satyr";
src: url("/css/satyr.ttf");
}

body { 
	width: 100%;
	background: url(/img/bg.png) no-repeat center top;
	background-color:black;
	color:white;
	
}

#body-container{
	
    
	
	width: 1300px;
	margin: 0 auto;
}

header{
	margin-top:100px;
	margin-left:auto;
	margin-right:auto;
	width: 1140px;
}
header .header-nav{
	display:inline-block;
}
#left-nav{
	width:422px;
	height:55px;
}
.navi{
	width:422px;
	height:55px;
	background: url(/img/navi_bg.png) no-repeat center top;
	background-color:black;
	padding:8px;
}
.navi ul{
	list-style-type: none;
	margin: 0 !important;
    padding: 0;
	font-size:25px;
}
.navi li{
	display:inline-block;
	padding: 0 30px;
}

.navi li a{
	font-family: 'satyr', Arial, sans-serif;
	color:#cfb265;
	text-decoration:none;
}
.navi li a:hover{
	color:#c87509;
}
#content{
	width: 100%;
	min-height: 794px;
}

#content a{
	color:#cfb265;
	font-size:13px;
}

#content p{
	font-size:13px;
}


#content a:hover{
	color:gold;
}

#content #left-content{
	width:875px;
	height:auto;
}

#content #x-background{
	background: url(/img/news_top_bg.png);
    background-repeat: repeat-x;
    width: 100%;
    height: 19px;
	background-position-x: 32px;
}
#content #x-background-bot{
	background: url(/img/news_bot_bg.png);
    background-repeat: repeat-x;
    width: 100%;
    height: 19px;
	background-position-x: 32px;
}

#content #y-background{
	background: url(/img/news_left_bg.png);
    background-repeat: repeat-y;
    height: 100%;
	border-bottom: solid 4px #947652;
}

#content #announcement{
	margin: 0 20px;
    background-color: black;
	height: 100%;
}

#announcement h1{
	color: #cfb265;
    padding: 10px;
    border-bottom: solid 1px #7d7a7a;
    margin-left: 15px;
    margin-right: 15px;
	
	font-size: 27px;
}

#announcement h3{
	color: #cfb265;
    padding: 0;
    font-size: 23px;
}

#announcement h4{
	font-family: 'satyr', Arial, sans-serif;
	color: #b7ac90;
	font-size:15px;
}

#announcement .updates{
	margin: 13px 60px;
    border-bottom: dotted 1px #6d6d6d;
	font-size: 13px;
}

#announcement p{
	color: white;
}

#right-content{
	width: 400px;
	height:auto;
}

#right-content h2{
	color:#cfb265;
	text-align:left;
	border-bottom: solid 1px #7d7a7a;
	margin:10px;
	font-family: 'satyr', Arial, sans-serif;
}

.right-content-border{
	border: solid 5px #947652;
	background-color: black;
	margin-bottom: 15px;
}

#right-content #account-info{
	width: 100%;
    height: 270px;
	
}

footer{
	width:100%;
	height:200px;
	background-color: black;
	margin-top: 100px;
}
#serverinfo table{
	font-size:12px;
	background-color: black;
	margin: 0 auto;
	width: 90%;
	margin-bottom: 5px;
}

#serverinfo tr {
    line-height: 2px;
}

#serverinfo th {
        border-bottom: 1px dotted #6d6d6d;
		border-top: none !important;
}

#serverinfo td {
		border-top: none !important;
        border-bottom: 1px dotted #6d6d6d;
}

#serverinfo .server-stat{
	color:#cfb265;
	width:20%;
}
#loginFormcontent{
	width:90%;
	padding: 13px;
	position:relative;
}

#loginFormcontent #err_login{
	font-size: 12px;
	color:red;

}

#loginFormcontent #account-info{
	position:absolute;
	left: 100px;
    top: 130px;
    color: white;
    font-size: 13px;
}
#loginFormcontent input{
	background-color: #25242a;
    border-color: #000000;
}

#welcome-page{
	 font-size: 13px;
}

#welcome-page p{
	padding: 5px 15px;
    font-size: 14px;
}

#welcome-page h1{
	font-size: 34px;
    padding: 22px 0;
	font-family: 'satyr', Arial, sans-serif;
}

.btn-login{
	background-color:#cfb265;
	border-color:#cfb265;
}

.btn-login:hover{
	background-color:#c87509 !important;
	border-color:#c87509;
}
footer ul{
	padding: 0;
    list-style-type: none;
    padding-top: 10px;
    text-align: center;
    border-bottom: solid 1px #353535;
}
footer li{
	display: inline-block;
}

footer li a{
	display: inline-block;
    padding: 10px 30px;
    font-size: 25px;
	font-family: 'satyr', Arial, sans-serif;
	color:#cfb265;
	text-decoration:none;
}

footer li a:hover{
	color:gold;
	text-decoration:none;
}

footer #footer-btm{
	padding: 0px 20px;
}

footer #footer-btm p{
	font-size:13px;
	margin:0;
	padding:5px 0;
	color:#9da180;
}

footer #footer-content{
	width: 1300px;
    margin: 0 auto;
}

#register{
	padding: 20px;
    margin: 10px;
}
#register input{
	background-color: #25242a !important;
    border-color: #000000 !important;
}

#page-content{
	padding: 10px;
	
}
#page-content p{
	padding: 10px 29px;
    font-size: 13px;
}

#account-user{
	padding: 10px;
    font-size: 13px;
}

.content-gold{
	color:#cfb265;
	font-weight:bold;
}
.content-wrapper{
	padding: 10px 29px;
    font-size: 13px;
}
</style>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</script>

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
	           	console.log($("#loginForm").serialize());
	           	
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
	
	$('.resetstats').click(function(){
		
		var charname = $(this).attr('id');


		if (confirm('Reset stats of ' + charname + '? This will cost you 10000 WcoinC')) {
			$(this).hide();
			$('#resetstats-process-' + charname).show();
			console.log('confirm');
			var url = "{{ url('/') }}/account/resetstats"; // the script where you handle the form input.
			
			$.ajax({
	           type: "POST",
	           url: url,
	           data: {charname: charname}, // serializes the form's elements.
	           success: function(data)
	           {
				   alert(data.info);
				   if(data.code === 1){
					   console.log(data.code);
						$('#resetstats-process-' + charname).text('Success!!!');
				   }else{
					   console.log(data.info);
					   console.log(data.code);
					   $('.resetstats').show();
					   $('.resetstats-process').hide();
				   }
	           	
	           }
	         });
			 
		} else {
			console.log('cancel');
		}
		
	});

});

</script>

<body>
<div id="body-container">
<header>
<div class="header-nav">
	<div class="navi">
		<ul>
			<li><a href="/">HOME</a></li>
			<li style="padding: 0 16px;"><a href="/register">REGISTER</a></li>
			<li><a href="{{$client_download}}" target="_blank">DOWNLOAD</a></li>
		</ul>
	</div>
</div>
<div class="header-nav"><img src="/img/logo.png"></div>
<div class="header-nav">
	<div class="navi">
		<ul>
			<li><a href="/donate">TOP UP</a></li>
			<li><a href="/rankings">RANKING</a></li>
			<li><a href="https://web.facebook.com/groups/320535715238147/" target="_blank">FORUM</a></li>
		</ul>
	</div>
</div>
</header>

<div id="content">
	<div id="left-content" class="float-left">
		<div id="x-background"></div>
		<div id="y-background">
			<div id="announcement">
				<div id="welcome-page">
				<h1>Welcome to Achilles MU</h1>
				<p> A Community of Well Experienced and Professional MU Players gathered together by their Love and Passion on playing MU Online Game… The Castle Siege, the Duel Room, PVP Fight and Events are the most Important Module of Achilles MU Season 2. We have our Donation System that also will have reflections of charity that will help our fellow Filipino. Achilles MU is not only a Game it is a Community that will reach out and help in a simple way.</p>
				</div>
				<div id="content">
					@yield('content')
				</div>
				
			</div>
		</div>
		<!--<div id="x-background-bot"></div>-->
	</div>
	<div id="right-content" class="float-right">
		<div id="account-info" class="right-content-border">
			<h2>Account @if (Auth::check()) Information @else Login @endif</h2>
			@if (Auth::check())
			<div id="account-user">
				<p>Hello {{ Auth::user()->memb___id }}! below are your account control panel.</p>
				<ul>
					<li><a href="{{ url('/') }}/account/info">Account Information</a></li>
					<li><a href="{{ url('/') }}/account/change-password">Change Password</a></li>
					<li><a href="{{ url('/') }}/account/vip">Go VIP</a></li>
					<li><a href="{{ url('/') }}/logout">Logout</a></li>
				</ul>
			</div>
			@else
			<div id="loginFormcontent">
			<div id="err_login"></div>
				<form id="loginForm">
				  <div class="form-group">
					<input type="text" class="form-control" name="username" placeholder="Enter your username">
				  </div>
				  <div class="form-group">
					<input type="password" class="form-control" name="password" placeholder="Enter your password">
				  </div>
				  <button type="submit" class="btn btn-primary btn-login" id="logme" style="margin-top: 10px;">Submit</button>
				  <img id="img-spinner" src="/img/ajax-loader.gif" style="display:none;padding-left: 21px;padding-top: 14px;">
				</form>
				
				<div id="account-info">
					<div id="forgotpass">Forgot your password? <a href="#">Click Here</a></div>
					<div id="reg">New player? <a href="#">Register</a></div>
				</div>
			</div>
			@endif
		</div>
		<div id="serverinfo" class="right-content-border">
			<h2>Server Info</h2>
			<table  class="table table-dark">
			  <thead>
				<tr>
				  <th style="width: 10%">Option</th>
				  <th style="width: 15%">Achilles MU Season 2</th>
				</tr>
			  </thead>
			  <tbody>
				<tr>
					<td class="server-stat">Date Opened</td>
					<td class="server-value">February 4, 2018</td>
				</tr>
				<tr>
					<td class="server-stat">Version</td>
					<td class="server-value">Season 2</td>
				</tr>
				<tr>
					<td class="server-stat">Experience</td>
					<td class="server-value">x2</td>
				</tr>
				<tr>
					<td class="server-stat">Drop</td>
					<td class="server-value">10%</td>
				</tr>
				<tr>
					<td class="server-stat">Rebirth</td>
					<td class="server-value">No</td>
				</tr>
				<tr>
					<td class="server-stat">Max Level</td>
					<td class="server-value">400</td>
				</tr>
				<tr>
					<td class="server-stat">Max Master Level</td>
					<td class="server-value">0</td>
				</tr>
				<tr>
					<td class="server-stat">Max Class</td>
					<td class="server-value">Second</td>
				</tr>
				<tr>
					<td class="server-stat">Max Wing</td>
					<td class="server-value">Second</td>
				</tr>
				<tr>
					<td class="server-stat">Max Item Level</td>
					<td class="server-value">13</td>
				</tr>
				<tr>
					<td class="server-stat">Mastering</td>
					<td class="server-value">No</td>
				</tr>
				<tr>
					<td class="server-stat">Summoner</td>
					<td class="server-value">No</td>
				</tr>
				<tr>
					<td class="server-stat">Rage Fighter</td>
					<td class="server-value">No</td>
				</tr>
				<tr>
					<td class="server-stat">380 System</td>
					<td class="server-value">Yes</td>
				</tr>
				<tr>
					<td class="server-stat">Elemental System</td>
					<td class="server-value">No</td>
				</tr>
				<tr>
					<td class="server-stat">Hack and Scam Support</td>
					<td class="server-value">Yes</td>
				</tr>
				<tr>
					<td class="server-stat">Talisman of Luck</td>
					<td class="server-value">No</td>
				</tr>
				<tr>
					<td class="server-stat">Talisman of Chaos Assembly</td>
					<td class="server-value">No</td>
				</tr>
				<tr>
					<td class="server-stat">Talisman of Ultimatum</td>
					<td class="server-value">No</td>
				</tr>
				<tr>
					<td class="server-stat">Lucky Set</td>
					<td class="server-value">No</td>
				</tr>
				<tr>
					<td class="server-stat" style="border:none !important">Damage/Buffs Scroll</td>
					<td class="server-value" style="border:none !important">No</td>
				</tr>
			  </tbody>
			</table>
		</div>
		<div id="serverinfo" class="right-content-border" style="text-align: center;padding-bottom: 10px;">
			<h2>Our Facebook Page</h2>
			<div class="fb-page" data-href="https://web.facebook.com/AchillesMUSupportandIssuesPage/" data-tabs="timeline" data-width="336" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
		
		</div>
	</div>
</div>
<div class="clearfix"></div>
</div>
<footer>
	<div id="footer-content">
		<ul>
			<li><a href="/mission">Mission</a></li>
			<li><a href="/vision">Vision</a></li>
			<li><a href="/faq">FAQ</a></li>
			<li><a href="/tos">Terms of Service</a></li>
			<li><a href="/privacy">Privacy Policy</a></li>
			<li><a href="/about-us">About Us</a></li>
			<li><a href="/contact-us">Contact Us</a></li>
		</ul>
		<div id="footer-btm">
			<div class="float-left">
				<p>Achilles MU Online Philippines Provided by IGC Network</p>
				<p>Copyright Achilles MU</p>
				<p>ALL RIGHTS RESERVE</p>
			</div>
			<div class="float-right">
				<img src="/img/logo.png" style="width:100px">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</footer>

</body>
</html>