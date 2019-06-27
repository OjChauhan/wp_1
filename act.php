<?php

$servername='localhost';
$username='super';
$password='super';
$dbName='wp_test';

$conn = new mysqli($servername,$username,$password,$dbName);
if($conn->connect_error)
    die("Disconnect");

$stmt = $conn->prepare("INSERT INTO ADD_USER_INFO(Name,Email,contact,company,message) VALUES(?,?,?,?,?)");

$stmt->bind_param('ssiss',$Name,$Email,$contact,$company,$message);

$Name = $_POST['full name'];
$Email = $_POST['email'];
$contact=$_POST['contact'];
$company =$_POST['company'];
$message = $_POST['user message'];
$stmt->execute();

echo"<br> Done";
?>
