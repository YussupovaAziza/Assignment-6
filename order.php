<?php
   include 'connect.php';

   if(isset($_POST["submit"])){
        $name_c = $_POST["C_name"];
        $email_c = $_POST["C_email"];
        $address_c = $_POST["C_address"];
        $phone_c = $_POST["C_phone"];
        $selected = $_POST["selection"];
        $mass_c = $_POST["C_mass"];
        $time_c = $_POST["time"];
        $sql = "INSERT INTO `order`(`name`, `email`, `address`, `phone`, `date`, `type`, `mass`)
         VALUES ('$name_c','$email_c','$address_c','$phone_c','$time_c','$selected','$mass_c')";
        $result = $conn->query($sql);
        if(!$result){
          die('Connection Failed   :  '.$conn->connect_error);
        }
        else{
          header("Location: Кондитерский дом.html");
        }

   }
?>
