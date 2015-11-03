<?php
 
 // Prevent accidental XSS
 header("Content-type: text/plain"); 
 // Run the script - make sure that your SSH key is set with *no* password
 
  shell_exec("/home/ubuntu/public_html/pull.sh"); 


?>