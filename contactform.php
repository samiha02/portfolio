<?php

include 'dbms.php';

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$mail=$_POST['mail'];
$message=$_POST['message'];


$sql="INSERT INTO details (firstname,lastname,mail,message) 
VALUES('$firstname','$lastname','$mail','$message')";


$result=$conn->query($sql);
header("Location: index.php");



?>