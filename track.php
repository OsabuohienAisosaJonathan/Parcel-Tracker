<?php
	session_start();
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">

<!-- Mirrored from lamlights-grp.com/cargo/track/track.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Nov 2021 14:05:24 GMT -->
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>  Lamlight Global Service (在线的) | (当天发货)</title>
	<style type="text/css">

	body,td,th {
		font-family: Verdana, Arial, Helvetica, sans-serif;

		font-size: 13px;

		color: #000033;

	}

	body {

		margin-left: 0px;

		margin-top: 0px;

		margin-right: 0px;

		margin-bottom: 0px;

	}

	a {

		font-size: 13px;

		color: #FFFFFF;

	}

	a:link {

		text-decoration: none;

	}

	a:visited {

		text-decoration: none;

		color: #FFFFFF;

	}

	a:hover {

		text-decoration: underline;

		color: #FFFFFF;

	}

	a:active {

		text-decoration: none;

		color: #FFFFFF;

	}
	</style>

	<link href="assets/css/navBar.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/bootstrap.css" rel="stylesheet" />
	<link href="assets/css/bootstrap-theme.css" rel="stylesheet" />
	<link href="assets/css/bootstrap-theme.css.css" rel="stylesheet" />
	<link href="assets/css/pageDesign.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/blueberry.css" rel="stylesheet" />
	<script src="assets/js/telemetry.js"></script>
	<script src="assets/js/menu_handler.js"></script>
	<script type="text/javascript" src="assets/js/jquery-1.11.3.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="assets/js/npm.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.blueberry.js"></script>
	<script type="text/javascript" src="assets/js/script.js"></script>
	<script type="text/javascript" src="assets/modernizr.html"></script>
	<script type="text/javascript">
		$(window).load(function(){
			$('.blueberry').blueberry();
		});
	</script>
	<style type="text/css">
		.style5 {
			font-size: 30px;
			font-weight: bold;
		}
	</style>
    
	<link rel="icon" type="image/png" href="assets/logo2.html">
    <link rel="shortcut icon" type="image/png" href="assets/logo2.html">
    
</head>

    
<body onload="FP_preloadImgs(/*url*/'assets/buttonE.html',/*url*/'assets/buttonD.html')">
	<div class="msgBox2">
		<div id="displayInfo">
			<div id="close">
				<a class="closeBox" href="#close">X</a>
			</div>
		</div>
	</div>
	<div id="displayBox">
		<div id="displayBox">
			<div id="OTNInfo2" class="searchB2 showBg"></div>
		</div>
	</div>

	<table width="102%" height="658" cellspacing="0" cellpadding="0" border="0" align="center">
	<tbody>
		<tr>
			<td colspan="4" height="90">
				<div style="text-align:center">
					<a href="index.html">
						<img src="assets/css/banner.png" width="850" height="82" />
					</a>
		    	</div>
			</td>
		</tr>
		<tr>
			<td colspan="4">
			<nav style="border-bottom:14px solid #000099; padding:0px;">
			<div id="nav">
			<div id="nav_wrapper"></div>
			</div>
			</nav>			
			</td>
		</tr>
		<tr>
			<td colspan="4">
				<nav style="border-bottom:14px solid #000099; padding:0px;">
					<div id="nav">
						<div id="nav_wrapper">
						</div>
						</div>
					</nav>
				</td>
			</tr>
		</tr>
	<tr>
		<td width="1147 valign="top">
			<div class="searchB" style="background:#cccccc;">
				<h3 class="style5" align="center">跟踪和追踪您的货物/快递</h3>
		<div style="margin:2px 0px 9px 0px;">

			<!-- Display the error message from the serverside if code is incorrect  -->
			<?php 
				if(isset($_SESSION["error"]))	{
					echo "<p style='color:red'>" . $_SESSION['error'] . "</p>";
					unset($_SESSION["error"]);
				}
			?>
			<form action="/backend/submit_track_code.php" method="POST">
				<input id="trackNmb" name="trackNumber" maxlength="13" type="text" required/> &nbsp;
				<button class="btn btn-danger confirmOtn2" name="login" type="submit" value="Sign in"> TRACK NOW </button>
			</form>

		<div align="right"></div>
		</div>

		<div style="font-size:small; color:#990033; text-align:justify;"><span class="miniPack">请在提供的字段中输入您的追踪号码，以追踪您的货件</span><br />
			<span>请输入由 3 个字母字符 + 10 位数字组成的跟踪号（即 EDB1234, 。请确保您的跟踪号是由外交服务代理 (DSA) 分配的。我们的系统不接受货运代理分配的跟踪号。 
				</span>
				</div>
				</div>
				
			</td>
			<td width="135" valign="top" height="393"></td>
			<td width="116" valign="top"></td>
	</tr>
	<tr>
		<td colspan="3" height="94">
			<div align="center">
				<img src="assets/css/footww.png" width="80%" height="80">
				</div>
			</td>
	</tr>		
	<tr>
		<td>
		</td>
	</tr>
<tbody>
</table>
<p></p>			
		
	<div class="modal"><!-- Place at bottom of page --></div>

	<div class="skype_c2c_menu_container notranslate" data-fp="{B3F0B431-707C-4908-934F-E7B5E801F261}" data-murl="https://pipe.skype.com/Client/2.0/" data-p2murl="https://c2c-p2m-secure.skype.com/p2m/v1/push" data-uiid="1" data-uilang="en" id="skype_c2c_menu_container" onmouseout="SkypeClick2Call.MenuInjectionHandler.hideMenu(this, event)" onmouseover="SkypeClick2Call.MenuInjectionHandler.showMenu(this, event)" style="display: none;">
	<div class="skype_c2c_menu_click2call"><a class="skype_c2c_menu_click2call_action" id="skype_c2c_menu_click2call_action" target="_self">Call</a></div>

	<div class="skype_c2c_menu_click2sms"><a class="skype_c2c_menu_click2sms_action" id="skype_c2c_menu_click2sms_action" target="_self">Send SMS</a></div>

	<div class="skype_c2c_menu_push_to_mobile"><a class="skype_c2c_menu_push_to_mobile_action" id="skype_c2c_menu_push_to_mobile_action" target="_blank">Call from mobile</a></div>

	<div class="skype_c2c_menu_add2skype"><a class="skype_c2c_menu_add2skype_text" id="skype_c2c_menu_add2skype_text" target="_self">Add to Skype</a></div>

	<div class="skype_c2c_menu_toll_info"><span class="skype_c2c_menu_toll_callcredit">You&#39;ll need Skype Credit</span><span class="skype_c2c_menu_toll_free">Free via Skype</span></div>
	</div>
</body>
	<!-- Mirrored from /index.php by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 30 Apr 2013 04:14:47 GMT --><!-- Mirrored from /index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Jun 2014 11:35:59 GMT -->
	<!-- Mirrored from lamlights-grp.com/cargo/track/track.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 24 Nov 2021 14:05:25 GMT -->
</html>

