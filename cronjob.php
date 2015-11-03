<?php
ini_set('display_errors',true);
require("components.php");
require "sent.php";
date_default_timezone_set("Europe/London");
$day = strtolower(date("D"));
$time = intval( strtolower(date("G")) );
echo $time."  ".$day;
$status = "verified";
$out = fopen("debug.txt","a+");
$msg = "";
$db = new mysqli("email.c9ssouqvesbm.us-west-2.rds.amazonaws.com","root","email123","Email Subscription");
if($db->connect_error){
	echo $db->connect_error."<br>"."connection not successfull<br>";
	
}

$stm = $db->prepare("SELECT email, category from users where ".$day." = ? and status = ?");
$stm->bind_param("is",$time,$status);

$response = $stm->execute();

if($response){
			echo "successfull prepared statement<br>";
		}
else{
	
			echo "unsuccessful prepared statement<br>";
		}
		

$result = $stm->get_result();

//var_dump($result->fetch_assoc());
	
/* now you can fetch the results into an array - NICE */
while ($myrow = $result->fetch_assoc()) {
	
	// use your $myrow array as you would with any other fetch
	
	$questions=get_questions( $myrow["category"]);
	$email_html = generate_email($questions,  $myrow["category"],$myrow["email"]);
	$status = send_questions($myrow["email"], $email_html);
    if ($status){
        //echo "email sent";
        $msg.="\nemail sent successfully to ".$myrow["email"]." \t for category ".$myrow["category"]."\n";
       // echo "email sent successfully to ".$myrow["email"]." \t for category ".$myrow["category"]."\n";
    }
    else{
        
        $msg.="\nemail unsuccessfully to ".$myrow["email"]." \t for category ".$myrow["category"]."\n";
    }

}

fwrite($out,$msg);
fclose($out);

?>
