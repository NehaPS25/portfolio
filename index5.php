<?php

   $server = "localhost:3307";
   $username = "root";
   $password = "";

   $con = mysqli_connect($server, $username, $password);
   
   if(!$con){
     die("connection to this database failed due to" . mysqli_connect_error());
   }
   //echo "success connecting to the db";

   $Applicants = $_POST['Applicants'];
   $Category = $_POST['Category'];
   $Company = $_POST['Company'];
   $Job = $_POST['Job'];
   $Location = $_POST['Location'];
   $Type = $_POST['Typee'];
   $User = $_POST['User'];

   $sql = "INSERT INTO `jobpost`.`createuser` (`Applicants`, `Category`, `Company`,`Job`, `Location`, `Type`, `User`) VALUES ('$Applicants', '$Category', '$Company', '$Job','$Location', '$Type', '$User');";

   echo $sql;  

   if($con->query($sql) == true)
   {
     echo "Successfully Created";
   }
   else
   {
     echo "ERROR: $sql <br> $con->error";
   }

   $con->close();

?>

