<?

class Transaction_Process {	
	
	function do_simpleTransaction($first, $last, $address, $address2, $zip, $state, $city, $phone, $email, $cardnumber, $expdate, $cvv, $amount, $trans_submit) {
			if(isset($trans_submit)) {
				
				$cardsplit = str_split($cardnumber);
				$ssl_customer_code = $cardsplit[12].$cardsplit[13].$cardsplit[14].$cardsplit[15];
				
				$ssl_invoice_number = $last.time();
				$ssl_transaction_type = "ccsale";
				$ssl_cvv2cvc2_indicator = 1;
				$country = "USA";
				
				$fields = array(
				   "ssl_merchant_id" => "XXX",
				   "ssl_user_id" => "XXX",
				   "ssl_pin" => "XXX",
				   "ssl_transaction_type" => urlencode($ssl_transaction_type),
				   "ssl_show_form" => "false",
				   "ssl_cvv2cvc2_indicator" => urlencode($ssl_cvv2cvc2_indicator), //0=Bypassed; 1=present; 2=Illegible; 9=Not Present.
				   "ssl_salestax" => "0", 

				   "ssl_result_format" => "html",
				   "ssl_test_mode" => "false",
				   "ssl_receipt_apprvl_method" => "redg", // sends to page with long data string url
				   //"ssl_receipt_apprvl_method" => "link", // just posts receipt with link at bottom
				   "ssl_receipt_link_url" => "http://www.revitalagency.com/invoice/testing/response.php",
				   "ssl_error_url" => "http://www.revitalagency.com/invoice/testing/error.php",
				   
				   //submitted details
				   "ssl_invoice_number" => urlencode($ssl_invoice_number),
				   "ssl_customer_code" => urlencode($ssl_customer_code),
				   "ssl_first_name" => urlencode($first),
				   "ssl_last_name" => urlencode($last),
				   "ssl_avs_address" => urlencode($address),
				   "ssl_address2" => urlencode($address2),
				   "ssl_avs_zip" => urlencode($zip),
				   "ssl_state" => urlencode($state),
				   "ssl_city" => urlencode($city),
				   "ssl_country" => urlencode($country),
				   "ssl_phone" => urlencode($phone),
				   "ssl_email" => urlencode($email),
				   "ssl_card_number" => urlencode($cardnumber),
				   "ssl_exp_date" => urlencode($expdate),
				   "ssl_cvv2cvc2" => urlencode($cvv),
 				   "ssl_amount" => urlencode($amount)

				);
				
				$url = "https://www.myvirtualmerchant.com/VirtualMerchant/process.do";
				
				//initialize the post string variable 
				$fields_string = '';
				//build the post string
				foreach($fields as $key=>$value) { $fields_string .=$key.'='.$value.'&'; }
				rtrim($fields_string, "&");
				
				//open curl session 
				$ch = curl_init();
				//begin seting curl options
				//set URL
				curl_setopt($ch, CURLOPT_URL, $url); //set method
				curl_setopt($ch, CURLOPT_POST, 1);
				//set post data string
				curl_setopt($ch, CURLOPT_POSTFIELDS, $fields_string);
				//these two options are frequently necessary to avoid SSL errors with PHP
				curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
				curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

				//perform the curl post and store the result 
				$result = curl_exec($ch);
				//close the curl session 
				curl_close($ch);
				//a nice message to prevent people from seeing a blank screen 
				//echo "Processing, please wait...";
			    				
			//print_r($result);				
			
			}
	}		
}
?>