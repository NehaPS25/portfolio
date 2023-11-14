<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Content-Type,Access-Control-Allow-Methods, Authorization, X-Requested-With');
include_once'database.php';

$table='createuser';
$data=json_decode(file_get_contents('php://input'));
$name=$data->name;
$id=$data->id;
$query='update '.$table.' set name=:name where Applicants=:id';
$stmt=$pdo->prepare($query);
$stmt->bindParam(':name',$name);
$stmt->bindParam(':id',$id);
if($stmt->execute())
{
    $response['message']='Applicants updated';
    echo json_encode($response);
}
else
{
    $response['message']='Error occcured';
    echo json_encode($response);
}

?>