<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Internet Dreams</title>
<link rel="stylesheet" href="{{ asset('css/backend/screen.css') }}" type="text/css" media="screen" title="default" />
<!--  jquery core -->
<script src="{{ asset('js/backend/jquery/jquery-1.4.1.min.js') }}" type="text/javascript"></script>

<!-- Custom jquery scripts -->
<script src="{{ asset('js/backend/jquery/custom_jquery.js') }}" type="text/javascript"></script>

<!-- MUST BE THE LAST SCRIPT IN <HEAD></HEAD></HEAD> png fix -->
<script src="{{ asset('js/backend/jquery/jquery.pngFix.pack.js') }}" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function(){
$(document).pngFix( );
});
</script>
</head>
<body id="login-bg">

<!-- Start: login-holder -->
<div id="login-holder">

	<!-- start logo -->
	<div id="logo-login">
		<a href="index.html"><img src="../images/backend/shared/logo.png" width="156" height="40" alt="" /></a>
	</div>
	<!-- end logo -->

	<div class="clear"></div>

	<!--  start loginbox ................................................................................. -->
	<div id="loginbox">

	<!--  start login-inner -->
	<div id="login-inner">
	    <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/login') }}">
	    <input type="hidden" name="_token" value="{{ csrf_token() }}">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>E-Mail</th>
			<td><input type="email" class="login-inp" name="email" value="{{ old('email') }}" /></td>
		</tr>
		<tr>
			<th>Password</th>
			<td><input name="password" type="password" value="************"  onfocus="this.value=''" class="login-inp" /></td>
		</tr>
		<tr>
			<th></th>
			<td valign="top"><input name="remember" type="checkbox" class="checkbox-size" id="login-check" /><label for="login-check">Remember me</label></td>
		</tr>
		<tr>
			<th></th>
			<td><input type="submit" class="submit-login"  /></td>
		</tr>
		</table>
		</form>
	</div>
 	<!--  end login-inner -->
	<div class="clear"></div>
	<a href="{{ url('/password/email') }}" class="forgot-pwd">Forgot Password?</a>
 </div>
 <!--  end loginbox -->

	<!--  start forgotbox ................................................................................... -->
	<div id="forgotbox">
		<div id="forgotbox-text">Please send us your email and we'll reset your password.</div>
		<!--  start forgot-inner -->
		<div id="forgot-inner">
		<form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
		<table border="0" cellpadding="0" cellspacing="0">
		<tr>
			<th>Email address:</th>
			<td><input type="email" class="login-inp" name="email" value="{{ old('email') }}" /></td>
		</tr>
		<tr>
			<th> </th>
			<td><input type="submit" class="submit-login"  /></td>
		</tr>
		</table>
		</form>
		</div>
		<!--  end forgot-inner -->
		<div class="clear"></div>
		<a href="" class="back-login">Back to login</a>
	</div>
	<!--  end forgotbox -->

</div>
<!-- End: login-holder -->
</body>
</html>