<?php

	require_once 'crypto.php';
	require_once 'PHPMailer/email.php';
	
	$SECRET_KEY = "Ju2lPwQrYzJu2lPwQrYzA6sdH2sxx2FlDfqsAinR"; //Ju2lPwQrYzJu2lPwQrYzA6sdH2sxx2FlDfqsAinR
	
	$to = "anil@karanm.com";
	$to_name = "Anil";
	$subject = "Webhook Test Mail";
	$body = "";
	
	if($_POST){
		
		if(isset($_POST['ENC_DATA']) && !empty($_POST['ENC_DATA'])){
			
			$decrypted_text = decrypt($_POST['ENC_DATA'],$SECRET_KEY);
			$data = explode('&',$decrypted_text);
			
			if(count($data)==4){
				
				$array = array();
				foreach($data as $keypair){
					$keypairArr = explode('=',$keypair);
					$array[$keypairArr[0]] = $keypairArr[1];
				}
				
				//return 200, fire sucess email
				$body = "Successfully decrypted data.";
				$body .="<pre>";
				$body .= print_r($array,true);
				http_response_code(200);
				
			}else{
				//cannot decrypt data successfully.return 404
				$body = "Invalid secret key,so cannot decrypt data.";
				$body .="<pre>";
				$body .= print_r($data,true);
				http_response_code(404);
			}
					
		}
		else{
			//Did not receive encrypted data, return 404, fire failure email
			$body = "Did not receive encrypted data in post data.";
			$body .="<pre>";
			$body .= print_r($_POST,true);
			http_response_code(404);
		}
			
	}else{
		//Did not receive any data, fire 404, send failure email
		$body = "Did not recieve post data.";
		http_response_code(404);
	}
	
	
	email($to,$to_name,$subject,$body);

?>