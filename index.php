<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Kissht</title>
  
 <link href="css/bootstrap.min.css" rel="stylesheet">
 <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="wrap">
		<div class="container">
			<div class="mainformbox">
			
	
				<h2>Application for Kissht</h2>
				<form action="kisshtRequestHandler.php" method="post">
				<div class="mainbox1">
					<div class="groupbox">
						<div class="row">
							<div class="col-md-3">
								<div class="labletext1">Email : </div>
							</div>
							<div class="col-md-9">
								<input type="text" name="email" id='email' class="nametextbox" placeholder="abc@gmail.com" data-required="true"/>
								<span id='email_error' style='color:red;'></span>
							</div>
						</div>
					</div>
					<div class="groupbox">
						<div class="row">
							<div class="col-md-3">
								<div class="labletext1">First Name : </div>
							</div>
							<div class="col-md-4">
								<input type="text" name="first_name" id='first_name' class="nametextbox" placeholder="" data-required="true"/>
								<span id='fn_error' style='color:red;'></span>
							</div>
							<div class="col-md-2">
								<div class="labletext1">Last Name : </div>
							</div>
							<div class="col-md-3">
								<input type="text" name="last_name" id='last_name' class="nametextbox" placeholder="" data-required="true"/>
								<span id='ln_error' style='color:red;'></span>
							</div>
						</div>
					</div>

					<div class="groupbox">
						<div class="row">
							<div class="col-md-3">
								<div class="labletext1">Phone No. : </div>
							</div>
							<div class="col-md-4">
								<input type="text" name='phone' id='phone' class="nametextbox datepicker" placeholder="" data-required="true"/>
								<span id='p_error' style='color:red;'></span>
							</div>

						</div>
					</div>

					<div class="groupbox">
						<div class="row">
							<div class="col-md-3">
								<div class="labletext1">Order ID : </div>
							</div>
							<div class="col-md-4">
								<input type="text" class="nametextbox" placeholder="" name='order_id' id='order_id' data-required="true"/>
								<span id='oi_error' style='color:red;'></span>
							</div>
							<div class="col-md-2">
								<div class="labletext1">Order Amount : </div>
							</div>
							<div class="col-md-3">
								<input type="text" class="nametextbox" placeholder=""name='order_amount' id='order_amount' data-required="true"/>
								<span id='oa_error' style='color:red;'></span>
							</div>
							
						</div>
					</div>
				</div>
				<div class="groupbox">
					<div class="row">
						<div class="col-md-9"></div>
						<div class="col-md-3">
							<div class="proceedbox">
								<button type="submit" class="btn proceedbtn" id='apply'>Apply For Kissht</button>
							</div>
						</div>
					</div>
				</div>
				</form>
				<div class="fastbanklogobox footerlogopowered">
					Powered By
					<img src="images/logo.png" width="149" alt="fastbank"/>
				</div>
			</div>
		</div>
	</div>

</body>
</html>

<script src="https://kissht.com/public/front/js/jquery.min.js"></script>

<script src="http://parsleyjs.org/dist/parsley.js"></script>

<script>
	$(document).ready(function(){
		base_url='<?php echo base_url();?>'
		
	$('#apply').click(function(){
		var form_email = $('#email').val();
		//alert(form_email);
		var first_name = $('#first_name').val();
		var last_name = $('#last_name').val();
		var phone = $('#phone').val();
		var order_id = $('#order_id').val();
		var order_amount = $('#order_amount').val();
		var sitekey = $('#sitekey').val();
		var merchant_id = $('#merchant_id').val();
		var redirect_url = $('#redirect_url').val();
		var cancel_url = $('#cancel_url').val();
		var number_of_txns_6_months = $('#number_of_txns_6_months').val();
		var transaction_average_value = $('#transaction_average_value').val();
		var ratio_card_payments = $('#ratio_card_payments').val();
		var ratio_net_payments = $('#ratio_net_payments').val();
		var ratio_cod_payments = $('#ratio_cod_payments').val();
		var number_of_returns = $('#number_of_returns').val();
		if(form_email == '' ){
			 $('#email_error').html('Please enter email address');
			return false;
		}else{
			$('#email_error').html('');
		}
		if(first_name == ''){
			 $('#fn_error').html('Please enter First Name');
			return false;
		}else{
			$('#fn_error').html('');
		}
		if(last_name == ''){
			 $('#ln_error').html('Please enter Last Name');
			return false;
		}else{
			$('#ln_error').html('');
		}
		if(phone == ''){
			 $('#p_error').html('Please enter Phone Number');
			return false;
		}else{
			$('#p_error').html('');
		}
		if(order_id == ''){
			 $('#oi_error').html('Please enter Order ID');
			return false;
		}else{
			$('#oi_error').html('');
		}
		if(order_amount == ''){
			 $('#oa_error').html('Please enter Order Amount');
			return false;
		}else{
			$('#oa_error').html('');
		}
	
	});

	});
</script>
