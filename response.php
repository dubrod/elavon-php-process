<?php 
$ssl_result=$_GET['ssl_result']; 
if ($ssl_result == 0 ){ 
	echo "Transaction approved";
} else {
	 if ($ssl_result==1){ 
	 echo "Transaction Declined";
	 }
}	  
?>