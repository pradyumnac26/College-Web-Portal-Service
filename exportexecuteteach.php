<?php
    $err = "";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
      if (($h = fopen("validation_creds_teacher.csv", "a")) !== FALSE) 
        {
          if($_POST["psw"] != $_POST["psw2"]){
            echo $err = "password do not match";
          }
          else{
            $line = array($_POST["uname"],$_POST["psw"]);
            print "The username and password are recorded <br>";

            fputcsv($h, $line);
          }
          fclose($h);
        };
    }
  ?>