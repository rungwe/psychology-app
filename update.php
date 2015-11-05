<?php
 
 // Prevent accidental XSS
 header("Content-type: text/plain"); 
 // Run the script - make sure that your SSH key is set with *no* password
 if( ini_get('safe_mode') ){
   echo "safe mode is on";
}else{
   // it's not
    echo "safe mode is off";
}
  echo shell_exec("/home/ubuntu/public_html/pull.sh"); 
  echo "<br>";
  echo sexec("/home/ubuntu/public_html/pull.sh");


?>