<?php
    require "components.php";
    $db = new mysqli("email.c9ssouqvesbm.us-west-2.rds.amazonaws.com","root","email123","Email Subscription");
		if($db->connect_error){
			echo $db->connect_error."<br>"."connection not successfull";
			
		}
    $stmt = $db->prepare("Delete from users where email=?");
    $stmt->bind_param("s",$_REQUEST["email"]);
   
    $response = $stmt->execute();
		
		if($response){
		    echo main_page("You have successfully unsubscribed to Subliminal Prime, feel free to subscribe at any time");
		}
		else{
			echo main_page("An error occured, retry to unsubscribe");
		}



?>

