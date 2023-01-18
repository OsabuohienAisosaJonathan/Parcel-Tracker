<?php
	session_start();
	if(isset($_SESSION["tracking_id"])){
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0048)https://lamlights-grp.com/cargo/track/track.html -->
<html xmlns="https://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<title>  Lamlight Global Service (Online) | (Same day delivery)</title>
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
	
	<link href="./assets/css/navBar.css" rel="stylesheet" type="text/css">
	<link href="./assets/css/bootstrap.css" rel="stylesheet">
	<link href="./assets/css/bootstrap-theme.css" rel="stylesheet">
	<link href="./assets/bootstrap-theme.css.map" rel="stylesheet">
	<link href="./assets/css/pageDesign.css" rel="stylesheet" type="text/css">
	<link href="./assets/css/blueberry.css" rel="stylesheet"><script src="./assets/js/telemetry.js.download"></script><script src="./assets/js/menu_handler.js.download">
	</script>
	<script type="text/javascript" src="./assets/js/jquery-1.11.3.min.js.download"></script>
	<script type="text/javascript" src="./assets/js/bootstrap.js.download"></script>
	<script type="text/javascript" src="./assets/js/npm.js.download"></script>
	<script type="text/javascript" src="./assets/js/bootstrap.min.js.download"></script>
	<script type="text/javascript" src="./assets/js/jquery.blueberry.js.download"></script>
	<script type="text/javascript" src="./assets/js/script.js.download"></script>
	<script type="text/javascript" src="./assets/js/modernizr.js.download"></script>
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
    <link rel="icon" type="image/png" href="https://lamlights-grp.com/cargo/images/logo2.png">
    <link rel="shortcut icon" type="image/png" href="https://lamlights-grp.com/cargo/images/logo2.png">
</head>

    
<body onload="FP_preloadImgs(/*url*/&#39;images/buttonE.jpg&#39;,/*url*/&#39;images/buttonD.jpg&#39;)" class="">
	<div class="msgBox2" style="display: inline-table; position: absolute; left: 18%; top: 40%;">
			<div id="displayInfo">
			<div id="close"><a class="closeBox" href="track.php">X</a></div>
			</div>
			
			<div id="displayBox">
			<div class="searchB2 showBg" id="OTNInfo2" style="">
			    
<table width="100%" align="center" cellpadding="5" cellspacing="3" id="tableDisplay">
<tbody><tr>
<td colspan="2" style="border:none;">
<div>
  <h4>Lamlight Express Service (LES)</h4>
</div>
<div id="padeInfo">
	<?php 
		if(isset($_SESSION['success'])){
			echo "<p style='color: green; font-size: 24px'>" . $_SESSION['success'] . "</p>";
			unset($_SESSION['success']);
		}
	?>
  Lamlight Express Service (LES) 在线的 跟踪是找出您的货物在哪里的最快方法. 当我们可以通过快递为您提供货物进度的实时详细信息时，无需致电客户服务 到达目的地途中的物流网络.</div>
<h4>在线跟踪号的结果摘要: <?php echo $_SESSION["tracking_id"];?>     <img src="./assets/js/print.jpg" width="20" height="20"></h4>
<button onclick="myFunction()">Print</button>

<script>
function myFunction() {
  window.print();
}
</script>

</td>
</tr>
<tr>
	<th colspan="2" id="titleHead">运输状态</th>
</tr>
<tr>
	<td><strong>收件人姓名:</strong></td>
	<td> <?php echo $_SESSION["receiver_name"]; ?></td>
</tr>
<tr>
	<td><strong>地址:</strong></td>
	<td> <?php echo $_SESSION["receiver_address"]; ?></td>
</tr>
<tr>
	<td><strong>发件人姓名 :</strong></td>
	<td> <?php echo $_SESSION["sender_name"]; ?></td>
</tr>
<tr>
	<td><strong>包裹状态:</strong></td>
	<td> <?php echo $_SESSION["package_status"]; ?> </td>
</tr>
<tr>
	<td><strong>包装内容:</strong></td>
	<td> <?php echo $_SESSION["content"]; ?></td>
</tr>
<tr>
	<td><strong>发货自:</strong></td>
	<td> <?php echo $_SESSION["dispatch_from"]; ?></td>
</tr>
<tr>
<th colspan="2" id="titleHead">商品描述/ 概要</th>
</tr>
<tr>
<td><strong>交货类型:</strong></td>
<td> <?php echo $_SESSION["delivery_type"]; ?></td>
</tr>
<tr>
	<td><strong>送货员:</strong></td>
	<td> <?php echo $_SESSION["delivery_officer"]; ?></td>
</tr>
<tr>
	<td><strong>产品重量:</strong></td>
	<td> <?php echo $_SESSION["item_weight"] . "kg";?></td>
</tr>
<tr>
  <td><strong>包裹颜色 :</strong></td>
  <td> <?php echo $_SESSION["parcel_color"]; ?></td>
</tr>
<tr>
  <td><strong>清关费、保险费:</strong></td>
  <td> <?php echo "$" . $_SESSION["charges"]; ?></td>
</tr>
<tr>
  <td><strong>总金额:</strong></td>
  <td> <?php echo "$" . $_SESSION["total_amt"]; ?></td>
</tr>
<tr>
  <th colspan="2" id="titleHead">包裹和托运中转</th>
</tr>
<tr>
	<td><strong>交货国家:</strong></td>
	<td> <?php echo $_SESSION["destination"]; ?></td>
</tr>
<tr>
	<td><strong>发货日期:</strong></td>
	<td> <?php echo $_SESSION["dispatch_date"];?></td>
</tr>
<tr>
	<td><strong>到达日期:</strong></td>
	<td> <?php echo $_SESSION["arrival_date"]; ?></td>
</tr>
<tr>
    <th colspan="2" id="titleHead">发货历史/ 地位 </th>
</tr>
<tr>
    <td style="border:none;">包裹位置: </td>
    <td><?php echo $_SESSION["parcel_location"]; ?></td>
</tr>
<tr>
    <td colspan="2" style="border:none;">
<table width="100%" style="border:none;">
<tbody>
    <tr>
        <td style="border:none;"> <img src="/assets/images/images.png" width="20"> </td>
        <td style="border:none;"> <img src="/assets/images/images.png" width="20"> </td>
        <td style="border:none;"> <img src="/assets/images/images.png" width="20"> </td>
        <td><?php echo $_SESSION["parcel_path"]; ?></td>

    </tr>
</tbody>
</table>
</td>
</tr>

</tbody>
</table>
</div>
			</div>
			</div><table align="center" border="0" cellpadding="0" cellspacing="0" height="658" width="102%">
<tbody>
		<tr>
			<td colspan="4" height="90"><div align="center"><a href="https://lamlights-grp.com/cargo/index.html"><img src="./assets/css/banner.png" width="850" height="82"></a>
		    </div></td>
		</tr>
		<tr>
			<td colspan="4">
			<nav style="border-bottom:14px solid #000099; padding:0px;">
			<div id="nav">
			<div id="nav_wrapper">			</div>
			</div>
			</nav>			</td>
		</tr>
			

					<tr>
					  <td width="135" height="393" valign="top"></td>
						<td valign="top" width="116"></td>
					  <td valign="top" width="1147">
						
                        <div class="searchB" style="background:#CCCCCC;">
						<h3 align="center" class="style5">TRACK AND TRACE YOUR CARGO/COURIER</h3>

						<div style="margin:2px 0px 9px 0px;"><input id="trackNmb" name="trackNumber" type="text"><button class="btn btn-danger confirmOtn2" name="login" type="submit" value="Sign in">&nbsp;TRACK NOW</button>

						<div align="right"></div>
						</div>

						<div style="font-size:small; color:#990033; text-align:justify;"><span class="miniPack">Please Enter Your Tracking Number in the provided field, to track your shipment</span><br>
						<span>Please enter TRACKING number composed of 3 alphabet characters + 10 digits of number (i/e EDB1234, . Please ensure your tracking number is assigned by Diplomatic Service Agent (DSA). Our system does not accept tracking number assigned by Freight Forwarder. </span></div>
						</div>
					</td></tr><tr>
						<td colspan="3" height="94"><div align="center"><img height="80" src="./assets/css/footww.png" width="80%"></div></td>
					</tr>
				<tr>
				  <td>                  
			    </td></tr></tbody>
			</table>

			<p></p>
			
			
		
	


<div class="modal"><!-- Place at bottom of page --></div>

<div class="skype_c2c_menu_container notranslate" data-fp="{B3F0B431-707C-4908-934F-E7B5E801F261}" data-murl="https://pipe.skype.com/Client/2.0/" data-p2murl="https://c2c-p2m-secure.skype.com/p2m/v1/push" data-uiid="1" data-uilang="en" id="skype_c2c_menu_container" onmouseout="SkypeClick2Call.MenuInjectionHandler.hideMenu(this, event)" onmouseover="SkypeClick2Call.MenuInjectionHandler.showMenu(this, event)" style="display: none;">
<div class="skype_c2c_menu_click2call"><a class="skype_c2c_menu_click2call_action" id="skype_c2c_menu_click2call_action" target="_self">Call</a></div>

<div class="skype_c2c_menu_click2sms"><a class="skype_c2c_menu_click2sms_action" id="skype_c2c_menu_click2sms_action" target="_self">Send SMS</a></div>

<div class="skype_c2c_menu_push_to_mobile"><a class="skype_c2c_menu_push_to_mobile_action" id="skype_c2c_menu_push_to_mobile_action" target="_blank">Call from mobile</a></div>

<div class="skype_c2c_menu_add2skype"><a class="skype_c2c_menu_add2skype_text" id="skype_c2c_menu_add2skype_text" target="_self">Add to Skype</a></div>

<div class="skype_c2c_menu_toll_info"><span class="skype_c2c_menu_toll_callcredit">You'll need Skype Credit</span><span class="skype_c2c_menu_toll_free">Free via Skype</span></div>
</div>

<!-- Mirrored from /index.php by HTTrack Website Copier/3.x [XR&CO'2010], Tue, 30 Apr 2013 04:14:47 GMT --><!-- Mirrored from /index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 13 Jun 2014 11:35:59 GMT -->
<div id="mask"></div></body></html>
 
<?php
	}
	else{
		// return an error message if tracking code is incorrect
		$_SESSION["error"] = "*Please enter a valid tracking code.";
		echo "<script type='text/javascript'> location = '/tutorialtest/track.php'; </script>"; 
	}
?>
