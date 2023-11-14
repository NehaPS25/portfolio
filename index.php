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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="https://previews.123rf.com/images/sarahdesign/sarahdesign1509/sarahdesign150900690/44518204-submit-icon.jpg" type="image/x-icon">
  <title>Submmited</title>
</head>
<style>
    
body
{
  background-image:url('https://64.media.tumblr.com/a0fd10d3bdfe1e167c37c152cb2c775d/tumblr_pgguzjLFas1vczpxxo1_400.gifv');
}

.heading
{
  text-align: center;
  width:100%;
  background-color: white;
}

</style>
<body>

<div class="heading">
<h2> YOUR FORM HAS BEEN SUBMITTED SUCCESSFULLY </h2>
</div>


  
</body>
</html>