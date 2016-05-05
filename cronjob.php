<?php

ini_set('display_errors',true);
require("components_original.php");
require "sent.php";
//date_default_timezone_set("Europe/London");
$day = strtolower(date("D"));
$dayArray = array(0=>"mon", 1=>"tue", 2=>"wed", 3=>"thu", 4=>"fri", 5=>"sat", 6=>"sun");
$dayKey = array_search($day, $dayArray);
$dayNext = ($dayKey == 6) ? $dayArray[0] : $dayArray[$dayKey+1];
$dayPrev = ($dayKey == 0) ? $dayArray[6] : $dayArray[$dayKey-1];
$time = intval( strtolower(date("G")) );
$timeNext = $time - 24;
$timePrev = $time + 24;
$status = "verified";
//$out = fopen("debug.txt","a+");
$msg = "";
$db = new mysqli("email.c9ssouqvesbm.us-west-2.rds.amazonaws.com","root","email123","Email Subscription");
if($db->connect_error){
	echo $db->connect_error."<br>"."connection not successfull<br>";
	
}

//$stm = $db->prepare("SELECT email, category from users where ".$day." = ? and status = ?");
$query = "SELECT * FROM users WHERE ($day='$time' AND status = 'verified') OR ($dayPrev='$timePrev' AND status='verified') OR ($dayNext='$timeNext' AND status='verified')";
$stm = $db->prepare($query);
//$stm->bind_param("is",$time,$status);

$response = $stm->execute();
echo $query;
if($response){
			echo "successfull prepared statement<br>";
		}
else{
	
			echo "unsuccessful prepared statement<br>";
		}
		

$result = $stm->get_result();

//var_dump($result->fetch_assoc());
$msg = '';	
/* now you can fetch the results into an array - NICE */
while ($myrow = $result->fetch_assoc()) {
	
	// use your $myrow array as you would with any other fetch
	
	if( $myrow["email"] != 'a' && $myrow["email"] != 'az' ){
		
		$questions=get_questions( $myrow["category"]);
		$email_html = generate_email($questions,  $myrow["category"],$myrow["email"]);
		$status = send_questions($myrow["email"], $email_html, "Daily Subliminal Primes");
		if ($status){
			//echo "email sent";
			$msg.="\nemail sent successfully to ".$myrow["email"]." \t for category ".$myrow["category"]."\t".strtolower(date("c"))."\n";
		   // echo "email sent successfully to ".$myrow["email"]." \t for category ".$myrow["category"]."\n";
		}
		else{
			
			$msg.="\nemail unsuccessfully to ".$myrow["email"]." \t for category ".$myrow["category"]."\n";
		}
	
	}

}
echo $msg;die;
//fwrite($out,$msg);
//fclose($out);

?>
