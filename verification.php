<?php
    require "components.php";
    $db = new mysqli("email.c9ssouqvesbm.us-west-2.rds.amazonaws.com","root","email123","Email Subscription");
		if($db->connect_error){
			echo $db->connect_error."<br>"."connection not successfull";
			
		}
    $status ="verified";
    $stmt = $db->prepare("Update users SET status=? where email=?");
    $stmt->bind_param("ss",$status,$_REQUEST["email"]);
   
    $response = $stmt->execute();
		
		if($response){
			echo main_page("Your email address has been successfully verified, to change your times simply re-subscribe with desired times.");
		}
		else{
			echo main_page("Something went wrong, try again");
		}


?>


