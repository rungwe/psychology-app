<?php
//$category = "patient";
//var_dump(get_questions($category));
function get_questions($category){

        if ($category == "humble"){
            $myfile = fopen("/var/www/html/Humble.txt", "r") or die("Unable to open file!");
        }

        if ($category == "confidence"){
            $myfile = fopen("/var/www/html/Confidence.txt", "r") or die("Unable to open file!");
        }

        if ($category == "forgiveness"){
            $myfile = fopen("/var/www/html/Forgivness.txt", "r") or die("Unable to open file!");
        }

        if ($category == "patient"){
            $myfile = fopen("/var/www/html/Patient.txt", "r") or die("Unable to open file!");
        }

        if ($category == "gratitude"){
            $myfile = fopen("/var/www/html/Gratitude.txt", "r") or die("Unable to open file!");
        }

        $lines = array();
        while(!feof($myfile)) {
          array_push($lines, fgets($myfile));
        }
        fclose($myfile);
        $i = 0;
        $check = array();
        $final = array();
        $pos = rand(0, count($lines)-1);
        array_push($final,strtolower($lines[$pos]));
        array_push($check, $pos);
        while($i != 4){
            $pos = rand(0, count($lines)-1);
            if(!in_array($pos, $check)){
                array_push($final,strtolower($lines[$pos]));
                array_push($check, $pos);
                $i++;
            }
        }
        
        return $final;
}

?>
