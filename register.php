<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Lamlight Global Service (在线的) | (当天发货)</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		
		
		<link rel="stylesheet" href="css/style1.css">
	</head>

	<body>

		<div class="wrapper">
			<div class="inner">
				<form action="backend/register.php" method="POST">
					<h3>报名表格</h3>
					<p>在我们的平台上注册您的详细信息，以便更轻松地访问我们的所有网站功能。</p>
					
					<input type="text" class="form-control" name="tracking_code" required>
					<span> 跟踪代码 </span>
					
					<label class="form-group">
						<input type="text" class="form-control" name="recipient_name" required>
						<span>收件人姓名</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" class="form-control" name="email"  required>
						<span for="">Mail</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" class="form-control" name="recipient_address" required>
						<span for="">收件人地址</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" class="form-control" name="sender_name" required>
						<span for="">发件人姓名</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" class="form-control" name="package_status" required>
						<span for="">包裹状态</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" class="form-control" name="package_content" required>
						<span for="">包装内容</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" class="form-control" name="dispatch_from" required>
						<span for="">发货自</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" class="form-control" name="delivery_type" required>
						<span for="">交货类型</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" class="form-control" name="delivery_officer" required>
						<span for="">送货员</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" class="form-control" name="item_weight" required>
						<span for="">产品重量</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" class="form-control" name="parcel_color" required>
						<span for="">包裹颜色</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" class="form-control" name="clearance_charges" required>
						<span for="">清关费/保险费</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" class="form-control" name="total_amount" required>
						<span for="">总金额</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" class="form-control" name="destination_country" required>
						<span for="">目的地国家</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" class="form-control" name="dispatch_date" required>
						<span for="">发货日期</span>
						<span class="border"></span>
					</label>
					<label class="form-group">
						<input type="text" class="form-control" name="arrival_date" required>
						<span for="">到达日期</span>
						<span class="border"></span>
					</label>
					<button type="submit" name="register"> 登记 
						<i class="zmdi zmdi-arrow-right"></i>
					</button>
				</form>
			</div>
		</div>
		
	</body>
</html>