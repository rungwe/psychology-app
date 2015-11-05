<?php
 
 // Prevent accidental XSS
 header("Content-type: text/plain"); 
 // Run the script - make sure that your SSH key is set with *no* password
 
  var_dump( shell_exec("/usr/bin/php /home/ubuntu/public_html/update.php") ); 
  echo "<br>";
  var_dump( exec("git pull --no-edit origin master") );


?>