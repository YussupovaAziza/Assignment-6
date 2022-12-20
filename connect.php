<?php
 $conn = new mysqli('localhost','root','', 'webpage');

 if($conn->connect_error)
    die('Connection Failed   :  '.$conn->connect_error);

?>