<?php

   $server = "localhost:3307";
   $username = "root";
   $password = "";

   $con = mysqli_connect($server, $username, $password);
   
   if(!$con){
     die("connection to this database failed due to" . mysqli_connect_error());
   }
   echo "success connecting to the db";

   $Applicants = $_POST['Applicants'];
   $Category = $_POST['Category'];
   $Company = $_POST['Company'];
   $Job = $_POST['Job'];
   $Location = $_POST['Location'];
   $Type = $_POST['Type'];
   $User = $_POST['User'];
   echo $Applicants;
  $sql = "UPDATE `jobpost`.`createuser` SET `Applicants`='$Applicants', `Category` = '$Category', `Company` = '$Company', `Job` = '$Job', `Location` = '$Location', `Type` = '$Type', `User` = '$User' WHERE `createuser`.`Applicants` = '$Applicants';";
  

   if($con->query($sql) == true)
   {
    header("Location: index4.html");
  
    exit;
   }
   else
   {
     echo "ERROR: $sql <br> $con->error";
   }

   $con->close();

?>