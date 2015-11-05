<?php
 
 // Prevent accidental XSS
 header("Content-type: text/plain"); 
 // Run the script - make sure that your SSH key is set with *no* password
 
  var_dump( shell_exec("/home/ubuntu/public_html/pull.sh") ); 
  echo "<br>";
  var_dump( exec("/home/ubuntu/public_html/pull.sh") );


?>