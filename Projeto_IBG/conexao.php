<?php

$conn = new MySQli('localhost','root','','projeto_ibg');

      if($conn->connect_error){
            die("Connection failed:" .$conn->connect_error);
      }

?>