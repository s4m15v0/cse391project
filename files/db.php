<?php
    
     $server = "";
     $username = "epiz_26781803";
     $password = "wwnLrbninb";
     $dbname = "epiz_26781803_cse391project";

     $conn = mysqli_connect($server, $username, $password, $dbname);

     if(!$conn){
         die("Connection Failed:".mysqli_connect_error());
     }

?>