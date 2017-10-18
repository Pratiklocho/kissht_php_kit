<?php
include 'Crypto.php';
error_reporting(0);
?>
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
					
					<h2>APPLICATION FOR FASTLOAN</h2>
					<?php
						if($_POST['ENC_DATA']){
							$secret_key=''; //key provided by Kissht
							$decryptedData=decrypt($_POST['ENC_DATA'],$secret_key);
							$decryptValues=explode('&', $decryptedData);
							$dataSize=sizeof($decryptValues);
							for($i = 0; $i < $dataSize; $i++)
							{
								$information=explode('=',$decryptValues[$i]);
								$_POST[$information[0]] = $information[1];
							}
							
						}
					?>

					<div class="mainbox1">

						<h2>Thank You!</h2>
							<h3>Your Transaction is successfully Completed</h3>
							<div class="thankinfo">
								  <p> <span>Transaction Amount: </span><?php echo $_POST['TRANSACTION_AMOUNT']?></p>
								  <p> <span>Merchant Order Id: </span><?php echo $_POST['MERCHANT_ORDER_ID']?></p>
								  <p> <span>Kissht Transaction Id: </span><?php echo $_POST['FB_TXN_ID']?></p>
								  <p> <span>Kissht Status: </span><?php echo $_POST['LOAN_STATUS']?></p>
								<a href="index.php"><button type="button" class="btn  backhomebtn">Back Home</button></a>
							</div>
					</div>

				</div>
			</div>
		</div>

	</body>
</html>
