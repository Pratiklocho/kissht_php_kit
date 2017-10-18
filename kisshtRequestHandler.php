<?php

/*
 * IMPORTANT NOTE: Please use $InputArr array keys as mentioned in API document
 */

	include 'Crypto.php';
	error_reporting(0);

	//Available on the Kissht Merchant Panel
	$merchant_id='102';
	$sitekey='04gqH2BBTJ04gqH2BBTJQD706xqmJBprMGG0j3cG';
	$secret_key='GV53AH7L82PJ9L1TH7GS4B936CI0TX0K';

	//Data Provided by Merchant
	$redirect_url = "http://localhost/kissht_php_kit/kisshtResponseHandler.php";
	$cancel_url = "http://localhost/kissht_php_kit/order_cancellation.html";

	$InputArr = array(
		'order_id'=>$_POST['order_id'],
		'transaction_amount'=>$_POST['order_amount'],
		'user_verified_email'=>$_POST['email'],
		'user_verified_mobile'=>$_POST['phone'],
		'first_name'=>$_POST['first_name'],
		'last_name'=>$_POST['last_name'],
		'sitekey'=>$sitekey,
		'merchant_id'=>$merchant_id,
		'redirect_url'=>$redirect_url,
		'cancel_url'=>$cancel_url,
		'number_of_txns_6_months'=>'',
		'ratio_card_payments'=>'',
		'ratio_net_payments'=>'',
		'ratio_cod_payments'=>'',
		'number_of_returns'=>'',
		'transaction_average_value'=>'',
		'billing_address'=>'',
		'billing_city'=>'',
		'billing_state'=>'',
		'billing_pincode'=>'',
		'billing_country'=>'',
		'billing_tel'=>'',
		'billing_email'=>'',
		'billing_name'=>'',
		'customer_since'=>'',
		'number_of_cancels'=>'',
		'moratorium_period'=>'',
		'is_moratorium_loan' => '',
		'shipping_address_1' => '',
		'shipping_address_2' => '',
		'shipping_city' => '',
		'shipping_pincode' => '',
		'shipping_state' => '',
		'shipping_country' => '',
		'SKU_list' => '',
	);


	//Create the payload to be encrypted
	foreach ($InputArr as $key => $value){
    	$merchant_data.=$key.'='.urlencode($value).'&';
  	}

	//encrypt the payload
	$encrypted_data=encrypt($merchant_data,$secret_key); // Method for encrypting the data.

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Kissht</title>
	</head>
	<body>

		<form name="redirect" method="post" action="https://www.test.kissht.com/api/apihandler/fastloan" style="display:none">
			<input type="hidden" name="data" value="<?php echo $encrypted_data;?>" />
			<input type="hidden" name="mer_id" value="<?php echo $merchant_id;?>" />
			<input type="hidden" name="sitekey" value="<?php echo $sitekey;?>" />
		</form>

		<script language='javascript'>document.redirect.submit();</script>
		
	</body>
</html>
