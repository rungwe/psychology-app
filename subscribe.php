<?php
    
    ini_set('display_errors',true);
	require "components.php" ;
	$fields = array("email","category","mon","tue","wed","thu","fri","sat","sun");
	if(!empty($_POST) ){
		if(empty($_POST["email"])){
			echo "no email supplied";
			exit();
		}
		if(empty($_POST["category"]) or $_POST["category"]=="None"){
			echo "no category supplied";
			exit();
		}
		$db = new mysqli("email.c9ssouqvesbm.us-west-2.rds.amazonaws.com","root","email123","Email Subscription");
		if($db->connect_error){
			echo $db->connect_error."<br>"."connection not successfull";
			
		}
		$stmt = $db->prepare("INSERT INTO users (email,category, mon,tue,wed,thu,fri,sat,sun) VALUES(?,?,?,?,?,?,?,?,?) ON DUPLICATE KEY UPDATE mon =?, tue=?, wed=?,thu=?,fri=?,sat=?,sun=?,category=?");
		 if(!$stmt)  //if there is an error, then it will be shown!. 
         { // show error                                                                                                       
          echo $db->error;
		  exit();
          } else {
           // everything is good to go !. 
         }
		foreach($fields as $field){
			if ($_POST[$field]=="none" ){
				$_POST[$field]=null;
			}
		}
		
		$stmt->bind_param('ssiiiiiiiiiiiiiis',$_POST["email"],$_POST["category"],$_POST["mon"],$_POST["tue"],$_POST["wed"],$_POST["thu"],$_POST["fri"],$_POST["sat"],$_POST["sun"],$_POST["mon"],$_POST["tue"],$_POST["wed"],$_POST["thu"],$_POST["fri"],$_POST["sat"],$_POST["sun"],$_POST["category"]);
		$response = $stmt->execute();
		

        // check user if verified 
        $user = $db->prepare("SELECT status from users where email= ?");
        $user->bind_param("s",$_POST["email"]);
        $response = $user->execute();
        $result = $user->get_result();
        $myrow = $result->fetch_assoc();


		if($response){
            if($myrow["status"]=="verified"){
			    $body=generate_email_html($_POST["email"]);
                $status=send_questions($_POST["email"],$body,"Subliminal Prime Verification");
                if($status){
                    echo 1;
                }
                else{
                    echo 0;
                    exit();
                    
                }
            }
            
            echo 1;
		}
		else{
			echo 0;
		}
		
	}
	else{
		echo "no input found";
	}





?>
