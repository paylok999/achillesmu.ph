<!DOCTYPE html>

<html lang="en">
<title>Sea MU Online</title>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<link rel="shortcut icon" href="/img/ico.png" type="image/png" />
<style>

@font-face {
font-family: "Helvetica";
}

body { 
	width: 100%;
	background: url(/img/bg_v3.jpg) no-repeat center top;
	background-color:black;
	color:white;
	
}

.body-container{
	width: 1300px;
	margin: 0 auto;
}

header{
	margin-left:auto;
	margin-right:auto;
	max-width: 1140px;
    width:100%;
    text-align:center;
}
.header-nav{
    text-align:center;
    margin-bottom: 20px;
}
#left-nav{
	width:422px;
	height:55px;
}
.navi{
	width: 100%;
    height: 58px;
    background: url(/img/navi_bg.png) no-repeat center top;
    text-align: center;
}
.navi ul{
	list-style-type: none;
	margin: 0 !important;
	font-size:15px;
    padding: 20px 0;
    font-weight: bold;
}
.navi li{
	display:inline-block;
	padding: 0 30px;
}

.navi li a{
	font-family: 'satyr', Arial, sans-serif;
	color:#fff;
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
    padding:10px;
	height: 100%;
    background: #3c2c1f url(/img/header_bg.jpg) repeat-x;
    margin-bottom:10px;
    min-height:265px;
}

#announcement h1{
	color: #cfb265;
    padding: 10px;
    border-bottom: solid 1px #67482e;
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
	width: 25%;
	height:auto;
}

#right-content h2{
	color:#ffb400;
	text-align:left;
	border-bottom: solid 1px #67482e;
	font-family: 'satyr', Arial, sans-serif;
    font-size: 20px;
    padding: 10px;
}

.right-content-border{
	margin-bottom: 10px;
    background: #1d0c0c  url(/img/header_bg.jpg) repeat-x;
    background-size: 10px 45px;
}

#right-content #account-info{
	width: 100%;
    height: 265px;
	
}

footer{
	width:100%;
	height:200px;
	background-color: black;
	margin-top: 100px;
}
#serverinfo table{
	font-size:12px;
	background-color: transparent;
	margin: 0 auto;
	width: 90%;
	margin-bottom: 5px;
}

#serverinfo tr {
    line-height: 5px;
}


#serverinfo th {
        border-bottom: 1px dashed #67482e;
		border-top: none !important;
}

#serverinfo td {
		border-top: none !important;
        border-bottom: 1px dashed #67482e;
        line-height:20px;
}

#serverinfo .server-stat{
	color:#cfb265;
	width:50%;
}
#serverinfo .server-value {
    text-align:left;
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
input{
	background-color: #331c0a !important;
    border-color: #251509 !important;
}
.form-control{
    color:#fff;
}
::placeholder {
    color:#fff;
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
    color:#ffb400;
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
    font-size: 15px;
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

#page-content{
	padding: 0;
	
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
.client-area{
    padding:20px 0;
}

.client-area .client-img{
    width:100%;
    max-width: 230px;
}
.client-area .logo-img{
    width:100%;
    max-width: 300px;
    margin: 0 180px;
    vertical-align: text-top;
}
.read-more{
    padding: 10px;
    margin: 10px 20px;
}

.read-more a{
    color:#f59797  !important;
}
.center-area{
    display:inline-block;
    width:25%;
    float:left;
}

#content h1{
    margin:0;
    padding:20px;
}

#content-container{
    padding: 20px;
    margin: 10px;
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
<div class="body-container">
<header>
<div class="client-area">
    <a href="{!! $content->where('id', 9)->first()->content !!}" target="_blank">
        <img src="/img/s2_v1.png" class="client-img">
    </a>
    <img src="/img/mu_logo.png" class="logo-img">
    
    <a href="{!! $content->where('id', 10)->first()->content !!}" target="_blank">
        <img src="/img/s15_v1.png" class="client-img">
    </a>
</div>
</header>
</div>
<div class="header-nav">
	<div class="navi">
		<ul>
			<li><a href="/">Home</a></li>
			<li style="padding: 0 16px;"><a href="/register">Register</a></li>
			<li><a href="https://web.facebook.com/groups/551357492208200/" target="_blank">Community</a></li>
			<li><a href="https://web.facebook.com/seamudotnet" target="_blank">Support</a></li>
			<li><a href="/rankings">Rankings</a></li>
		</ul>
	</div>
</div>
<div class="body-container">
<div id="content">
	<div id="right-content" class="center-area">
        <div id="account-info" class="right-content-border" style="overflow:hidden">
			<h2>Our Facebook Page</h2>
			<div class="fb-page" data-href="https://web.facebook.com/seamudotnet/" data-tabs="timeline" data-width="336" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"></div>
		</div>
        <div id="serverinfo" class="right-content-border">
			<h2>Season 2 Information</h2>
			<table  class="table table-dark">
			  <thead>
			
			  </thead>
			  <tbody>
				<tr>
					<td class="server-stat">Version</td>
					<td class="server-value">Season 2</td>
				</tr>
				<tr>
					<td class="server-stat">Experience</td>
					<td class="server-value">x10</td>
				</tr>
                <tr>
					<td class="server-stat">Seal Experience</td>
					<td class="server-value">None</td>
				</tr>
                <tr>
					<td class="server-stat">VIP Server</td>
					<td class="server-value">None</td>
				</tr>

				<tr>
					<td class="server-stat">Max Level</td>
					<td class="server-value">400</td>
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
					<td class="server-stat">Summoner</td>
					<td class="server-value">No</td>
				</tr>
				<tr>
					<td class="server-stat">Rage Fighter</td>
					<td class="server-value">No</td>
				</tr>
				</tr>
			  </tbody>
			</table>
            <div class="read-more"><a href="/server-info/s2">Read more
            <svg class="bi bi-chevron-double-right" width="10px" height="10px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
              <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
            </svg>
            </a></div>
		</div>
        <div id="serverinfo" class="right-content-border">
            <h2>Season 2 Rankings</h2>
            <div class="read-more">
                <table  class="table table-dark">
                    <tr>
                      <th>Rank</th>
                      <th>Name</th>
                      <th>Level</th>

                    </tr>
                @foreach($rankings as $key => $v)
                    @if($key < 5)
                    <tr>
                        <td class="server-stat">{{$key+1}}</td>
                        <td class="server-stat">{{$v->name}}</td>
                        <td class="server-value">{{$v->total_level}}</td>
                    </tr>
                    @endif
                @endforeach
                </table>
                <a href="/rankings/s2">Read more
                <svg class="bi bi-chevron-double-right" width="10px" height="10px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                  <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
                </a>
            </div>
		</div>
    </div>
	<div id="left-content" class="center-area" style="width:48%; margin:0 10px;">
        <div id="announcement">
            <div id="welcome-page">
            <h1>Welcome to Sea MU!</h1>
            <p> A Community of Well Experienced and Professional MU Players gathered together by their Love and Passion on playing MU Online Game… The Castle Siege, the Duel Room, PVP Fight and Events are the most Important Module of Sea MU.</p>
            </div>
            <!--<div id="content">
                @yield('content')
            </div>-->
            
        </div>
        
        <div id="announcement" style="background-size: 10px 73px;background-color:#1d0c0c;padding:0">
            <div id="content" style="margin:0">
                @yield('content')
            </div>
            
        </div>
		<!--<div id="x-background-bot"></div>-->
	</div>
	<div id="right-content" class="center-area">
		<div id="account-info" class="right-content-border">
			<h2>Account @if (Auth::check()) Information @else Login @endif</h2>
			@if (Auth::check())
			<div id="account-user">
				<p>Hello {{ Auth::user()->memb___id }}! below are your account control panel.</p>
				<ul>
					<li><a href="{{ url('/') }}/account/info">Account Information</a></li>
					<li><a href="{{ url('/') }}/account/change-password">Change Password</a></li>
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
			<h2>Season 15 Information</h2>
			<table  class="table table-dark">
			  <thead>
			
			  </thead>
			  <tbody>
				<tr>
                    <td class="server-stat">Version</td>
                    <td class="server-value">Season 15 Part 1-3</td>
                </tr>
                <tr>
                    <td class="server-stat">Normal Experience</td>
                    <td class="server-value">x1500</td>
                </tr>
                <tr>
                    <td class="server-stat">Master Experience</td>
                    <td class="server-value">x1500</td>
                </tr>
                <tr>
                    <td class="server-stat">Majestic Experience</td>
                    <td class="server-value">x1500</td>
                </tr>
                <tr>
                    <td class="server-stat">Experience Multiplies</td>
                    <td class="server-value">x3 bonus per member</td>
                </tr>
                <tr>
                    <td class="server-stat">Seal Experience</td>
                    <td class="server-value">None</td>
                </tr>
                <tr>
                    <td class="server-stat">VIP Server</td>
                    <td class="server-value">None</td>
                </tr>

                <tr>
                    <td class="server-stat">Max Normal Level</td>
                    <td class="server-value">400</td>
                </tr>
                <tr>
                    <td class="server-stat">Max Master Level</td>
                    <td class="server-value">400</td>
                </tr>
                <tr>
                    <td class="server-stat">Max Majestic Level</td>
                    <td class="server-value">400</td>
                </tr>
			  </tbody>
			</table>
            <div class="read-more">
                <a href="/server-info/s15">Read more
                <svg class="bi bi-chevron-double-right" width="10px" height="10px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                  <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
                </a>
            </div>
		</div>
		
		<div id="serverinfo" class="right-content-border">
            <h2>Season 15 Rankings</h2>
            <table  class="table table-dark">
                    <tr>
                      <th>Rank</th>
                      <th>Name</th>
                      <th>Level</th>

                    </tr>
                @foreach($rankingss15 as $key => $v)
                    @if($key < 5)
                    <tr>
                        <td class="server-stat">{{$key+1}}</td>
                        <td class="server-stat">{{$v->name}}</td>
                        <td class="server-value">{{$v->total_level}}</td>
                    </tr>
                    @endif
                @endforeach
                </table>
                
            <div class="read-more">
                <a href="/rankings/s15">Read more
                <svg class="bi bi-chevron-double-right" width="10px" height="10px" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M3.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L9.293 8 3.646 2.354a.5.5 0 0 1 0-.708z"/>
                  <path fill-rule="evenodd" d="M7.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L13.293 8 7.646 2.354a.5.5 0 0 1 0-.708z"/>
                </svg>
                </a>
            </div>
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
				<p>Sea MU Online Provided by IGC Network</p>
				<p>Copyright Sea MU</p>
				<p>ALL RIGHTS RESERVE</p>
			</div>
			<div class="float-right">
				<img src="/img/mu_logo.png" style="width:175px">
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</footer>

</body>
</html>